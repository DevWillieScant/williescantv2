@extends('main')
@section('content')

    <div class="register">
        <h1>Welcome to Willie Scant</h1>
        <form action="{{route('registration')}}" method="post">
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
            <div class="grid">
                <div class="one">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{old('first_name')}}" required>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" value="{{old('phone_number')}}" required>
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}" required>
                </div>
                <div class="two">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{old('last_name')}}" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                    <label for="user_role">Join As A?</label>
                    <select name="user_role" id="user_role">
                        <option value="1">Customer</option>
                        <option value="2">Supplier</option>
                    </select>
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="" required>
                </div>
            </div>
            <button type="submit">Sign Up</button><br>
            <p>Have an account? <a href="/login">Sign In here</a></p><br>
        </form>
    </div>

    
@endsection