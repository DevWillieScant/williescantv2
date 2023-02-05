<!DOCTYPE html>
<html lang="eng">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Center Div</title>
        <link rel="stylesheet" href="{{url('css/try.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    </head>
    <body>
    <nav class="navbar">
  <div class="logo">
    <img src="logo.jpg" alt="Logo">
  </div>
  <div class="bars" onclick="toggleLinks()" id="bars">
    <i class="fas fa-bars"></i>
  </div>
  <div class="links">
    <a href="#">Home</a>
    <a href="#">About</a>
    <div class="dropdown">
      <a href="#">Menu</a>
      <div class="dropdown-content">
        <header class="dropdown-header">Header</header>
        <div class="dropdown-grid">
          <div>
            <img src="image1.jpg" alt="Image 1">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
          </div>
          <div>
            <img src="image2.jpg" alt="Image 2">
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
document.getElementById('bars').addEventListener('click', function(){
  document.querySelector('.links').style.display = 'block';
  document.querySelector('.bars').style.display = 'none';
})
</script>


    </body>

</html>