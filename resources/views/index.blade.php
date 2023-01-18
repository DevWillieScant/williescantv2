@extends('main')
@section('content')
    <div class="content">
        <h1>Online Supermarket</h1>
        <img src="{{url('images/logo.png')}}" alt="Not Found" class="logo2">
        <div class="search">
            <form action="">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form> 
        </div>
    </div>  

@endsection

