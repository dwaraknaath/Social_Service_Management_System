<?php
include 'config.php';
if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $birthdate = $_POST["DOB"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $bloodgroup = $_POST["bloodgrp"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  $alcoholic = $_POST["alcoholic"];
  $insert = "INSERT INTO `pro_d`(name, DOB, gender, age, bloodgrp, email, contact, state, city, alcoholic) VALUES ('$name', '$birthdate', '$gender', '$age', '$bloodgroup', '$email', '$contact', '$state', '$city', '$alcoholic')";
  $rs = mysqli_query($conn, $insert);
  header('location: homepg.php');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>pro-donor</title>
    <link rel="stylesheet" href="pro(do).css">
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://127.0.0.1:5500/homepg.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLogin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarLogin">
                <li><a class="dropdown-item" href="http://localhost/project/login_form.php">Login</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/register_form.php">Sign up</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
        </body>
  </head>
  <head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="pro(do).css">
  </head>
<body> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
  <div class="card-wrap mx-auto " style="width:50%;">
    <div class="container">
    <form action="user_page.php" method="post">
        <h1>DONOR PROFILE</h1>
        <p>Please fill your personal details.</p>
        <hr>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" class="form-control" placeholder="name" required class="form-control"><br>
        <div class="d-flex mb-4">
        <label for="dob">Date of Birth:</label><br>
        <input type="date" name="DOB" required class="form-control ms-3" value="2001-07-22"
          min="1990-01-01" max="2004-12-31">
          </div>
        <div class="d-flex mb-4">
        <label for="gender">Gender:</label>
          <select id="gender" name="gender" required class="form-control ms-2" style="width:25%;">
          <option value="">--Select--</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select><br>
      </div>
      <div class="d-flex mb-4 ">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="120" required class="form-control ms-2" style="width:25%"><br>
      </div>
        <div class="d-flex">
        <label for="bloodgrp">Blood Group:</label>
        <select id="bloodgrp" name="bloodgrp" required class="form-control ms-2" style="width:25%;">
        <option value="">--Select--</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        </select>
        </div>
        <br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="email" required class="form-control"><br>

      <label for="contact">Contact:</label>
      <input type="tel" id="contact" name="contact" placeholder="+91" required class="form-control"><br>

      <label for="state">State:</label><br>
      <input type="text" id="state" name="state" placeholder="state" required class="form-control"><br>

      <label for="city">City:</label><br>
      <input type="text" id="city" name="city" placeholder="city" required class="form-control"><br>
      
      <div class="d-flex mb-4">
      <label for="alcoholic">Alcoholic:</label>
          <select id="alcoholic" name="alcoholic" required class="form-control ms-2" style="width:25%;">
          <option value="">--Select--</option>
          <option value="YES">Yes</option>
          <option value="No">No</option>
          </select>
      </div>
          <hr>

        <div class="clearfix">
            <button type="submit" name="submit"  class="submitbtn mx-auto w-100">submit</button>
        </div> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</form>
    </div>
  </div>
</body>
</html>