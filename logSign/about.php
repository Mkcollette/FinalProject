<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK SALOON AND SPA</title>
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
    <!-- Footer Section -->
    <footer>
      <div class="flex-container">
        <div class="footer-items">
          <p>&copy;All rights reserved</p>
        </div>
    </footer>
</div>
</body>
</html>