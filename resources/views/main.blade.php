<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Willie Scant</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{url('images/logo.png')}}" alt="Not Found"></a>
        </div>
        <nav>
            <ul>
                <li><a href="#" id="login">LOGIN</a></li>
                <li><a href="#" id="signup">SIGN UP</a></li>
                <li><i class="fas fa-th"></i></li>
            </ul>
        </nav>
    </div>

        @yield('content')

    <div class="footer">
        <p>© 2022 Willie Scant Company. All Rights Reserved</p>
    </div>

     <!-- Start of popup for registration -->
   <div class="bg-modal">
     <div class="modal-content">

        <div class="close">+</div>
        <img src="{{url('images/logo.png')}}" alt="Willie Scant">

        <h2>Registration Form</h2>
        <form action="regUser" method="post">
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
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('phone_number')}}" required><br>
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}" required><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" required><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}" required><br>
                                    
            </div>
            <button type="submit">Sign Up</button><br>
        </form>
     </div>
   </div>

        <!-- Start of popup for login -->
    <div class="modal-bg">
     <div class="modal-content">

        <div class="close">+</div>
        <img src="{{url('images/logo.png')}}" alt="Willie Scant">

        <h2>Login</h2>
        <form action="logUser" method="post">
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
        </form>
     </div>
   </div>

   <script>

    document.getElementById('signup').addEventListener('click', function(){
        document.querySelector('.bg-modal').style.display = 'flex';
    });

    document.getElementById('login').addEventListener('click', function(){
        document.querySelector('.modal-bg').style.display = 'flex';
    });

    document.querySelector('.close').addEventListener('click', function()
    {
        document.querySelector('.bg-modal, .modal-bg').style.display = 'none';
    });

   </script>

</body>
</html>