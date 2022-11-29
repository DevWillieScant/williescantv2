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
                <li><a href="/login">LOGIN</a></li>
                <li><a href="/register">SIGN UP</a></li>
                <li><i class="fas fa-th"></i></li>
            </ul>
        </nav>
    </div>

        @yield('content')
        
    <div class="footer">
        <p>© 2022 Willie Scant Company. All Rights Reserved</p>
    </div>
</body>
</html>