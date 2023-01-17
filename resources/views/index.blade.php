@extends('main')
@section('content')
    <div class="content">
        <h1>Online Supermarket</h1>
        <img src="{{url('images/logo.png')}}" alt="Not Found" class="logo2">
        <div class="search">
            
                <input id="search-input" type="search" id="form1" class="form-control">
                <label class="form-label" for="form1">Search</label>
                <i class="fas fa-search"></i>
            
        </div>
    </div>  

    <div class="input-group">
  <div class="form-outline">
    <input id="search-input" type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button id="search-button" type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
@endsection

