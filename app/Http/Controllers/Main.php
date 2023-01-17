<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Str;

class Main extends Controller
{
    public function index()
    {
        return view('index');
    }
 
      public function message()
    {
        return view('message');
    }

    public function registration(Request $request)
    {
        $request->validate
        (
            [
                
                'username'=>'required',
                'phone_number'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|max:20'
            ]
        );

            $user = new User();
            $user -> username = $request->username;
            $user -> phone_number = $request->phone_number;
            $user -> email = $request->email;
            $user -> password = Hash::make($request->password) ;
            $user-> email_verification_code = Str::random(40);
            $res = $user->save();

            Mail::to($request->email)->send(new EmailVerificationMail($user));
            if($res)
            {
                return redirect('message');
            }

            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }

    }

    public function loginuser(Request $request)
    {
        $request->validate
        (
            [
                'username'=>'required',
                'password'=>'required|min:8|max:20',
            ]
         );

         $user = User::where('username', '=', $request->username)->first();
         if(!$user)
         {
            return back()->with('fail', 'Email not registered');
         }
         else
         {
            if(!$user->email_verified_at)
            {
                return back()->with('fail', 'Email not verified');
            }
            else
            {
                if(!$user->is_active)
                {
                    return back()->with('fail', 'User not active. Contact admin.');
                }
                else
                {
                    if($user)
                    {
                      if(Hash::check($request->password, $user->password))
                      {
                           $request->session()->put('loginId', $user->id);
                           return redirect('dashboard');
                      }
                      else
                      {
                           return back()->with('fail', 'The password is incorrect');
                      }
                    }
           
                    else
                    {
                           return back()->with('fail', 'Invalid Credentials');
                    }
                }
            }
         }
    }

    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function verify_email($verification_code)
    {
        $user=User::where('email_verification_code', $verification_code)->first();

        if(!$user)
        {
            return redirect('registration')->with('error', 'Invalid URL');
        }
        else
        {
            if($user->email_verified_at)
            {
                return redirect('login')->with('error', 'Email already verified');
            }
            else
            {
                $user->update
                (
                    [
                        'email_verified_at' => \Carbon\Carbon::now()
                    ]
                );

                return redirect('login')->with('success', 'Email verified successfully');

            }
        }
    }
}
