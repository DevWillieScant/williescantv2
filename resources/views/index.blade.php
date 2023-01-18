@extends('main')
@section('content')
    <div class="content">
        <div>
          <h1>Online Supermarket</h1>
        </div>
        <div>
          <img src="{{url('images/logo.png')}}" alt="Not Found" class="logo2">
        </div>
        <div>
          <div class="search">
            <form action="">
                <input type="search" class="input">
                <label class="placeholder">Search</label>
                <i class="fas fa-search"></i>
            </form> 
        </div>
        </div>
    </div>  

@endsection

