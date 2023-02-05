@extends('main')
@section('content')
  <div class="center-container">
    <h1>Online Supermarket</h1>
    <img src="{{url('images/logo.png')}}" alt="Logo">
    <div class="search-container">
      <input type="text" id="search" required>
      <label for="search">Search</label>
      <i class="fas fa-search"></i>
    </div>
  </div>


  <script>
        document.getElementById("search-input").addEventListener("focus", function() {
        this.parentNode.querySelector("label").classList.add("active");
        });

        document.getElementById("search-input").addEventListener("blur", function() {
        if (!this.value) {
        this.parentNode.querySelector("label").classList.remove("active");
        }
        });
    </script>

@endsection

