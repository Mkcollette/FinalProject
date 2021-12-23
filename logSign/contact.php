<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK SALOON AND SPA</title>
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <!-- Form -->
    <form>
            <div class="mb-3">
              <label for="exampleInputFirstName1" class="form-label">First Name</label>
              <input type="text" class="form-control" id="exampleInputFirstNamel1">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputLastName1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleLastName1">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPhonenumber1" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="exampleInputPhonenumber1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Please Leave a Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <!-- End form -->
          <br><br>
          <!-- Footer Section -->
    <footer>
      <div class="flex-container">
        <div class="footer-items">
          <p>&copy;All rights reserved</p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>