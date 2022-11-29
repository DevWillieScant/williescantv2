@extends('main')
@section('content')

    <div class="login">
        <h1>Welcome</h1>
        <form action="{{route('loginuser')}}" method="post">
            @If(Session::has('success'))
                <div class="alert-message green">
                    {{Session::get('success')}}
                </div>
            @endif
            @If(Session::has('fail'))
                <div class="alert-message red">
                    {{Session::get('fail')}}
                </div>
            @endif
            @csrf
            <label for="name">Your Username</label><br>
            <input type="text" placeholder="Username" name="username" value="{{old('username')}}" required><br>
            <label for="password">Password<span></span></label><br>
            <input type="password" placeholder="Password" name="password" value="{{old('password')}}" required><br>
            <button type="submit">Login</button><br>
            <p>Don't have an account? <a href="/register">Sign Up here</a></p>
        </form>
    </div>
    <div class="contactus">
        <p><a href="#">Forgot Password?</a></p><br>
        <p>If you are not able to sign in, please <a href="#">contact us.</a></p>
    </div>

@endsection