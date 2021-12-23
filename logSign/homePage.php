<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MK Saloon and Spa</title>
    <style>
    .main-container {
    border: 5px dashed white;
    margin: 0 5%;
    }
    .top-nav {
    background-color: black;
    padding-top: 25px;
    padding-bottom: 25px;
    text-align: right;
    }
    .top-nav a {
    padding-right: 30px;
    text-decoration: none;
    }
    .top-nav a:visited{
    color: green;
    }
    .top-nav :active{
    color: blueviolet;
    }
    .top-nav a:hover{
    color:gray;
    }
    .top-nav h4{
      text-align:left;
      color: white;
    }
    footer {
    margin: 0%;
    padding: 10px;
    background-color: skyblue;
    }
    </style>
  </head>
  <body>
    <div class="main-container">
    <!--NavBar section -->
    <nav>
      <div class="top-nav">
      <h4>MK SALOON AND SPA</h4>
        <a href="homePage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact us</a>
        <a href="logIn.php">Log In/Sign Up</a>
      </div>
    </nav>
    
<br><br>
<!-- End of NavBar -->

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slideMage1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MK SALOON AND SPA</h5>
        <p>We give our best to give out the best .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slideMage2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MK SALOON AND SPA</h5>
        <p>Come experience the best services.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slideMage4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MK SALOON AND SPA</h5>
        <p>Come experience the best services.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
    <!-- Footer Section -->
    <footer>
      <div class="flex-container">
        <div class="footer-items">
          <p>&copy;All rights reserved</p>
        </div>
    </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>