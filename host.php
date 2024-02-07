<?php
include 'config.php';

if(isset($_POST['submit'])){
  $event = $_POST['event'];
  $doe = $_POST['DOE'];
  $contact =$_POST['contact'];
  $venue = $_POST['Venue'];
  $osr = $_POST['OSR'];
  $insert= "INSERT INTO host(event, DOE, contact, Venue, OSR) VALUES('$event', '$doe', '$contact', '$venue', '$osr')";
  $rs = mysqli_query($conn, $insert);
  header('location:homepg.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="host.css">
  <title>host</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="homepg.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
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

  <div class="card-wrap mx-auto w-50 ">
    <div class="container">
      <form action="host.php" method="POST">
              <h1>HOST details</h1>
              <p>Please fill the below details.</p>
              <hr>
               <div class="row">
                      <label for="name">event/emergency/etc....:</label><br>
                    <input type="text2" class="form-control w-45 " name="event" placeholder="Event" required class="form-control">
                      </div><br>
                  <div class="form-row">
                      <label for="start">Date of event:</label>
                  <input type="date" id="start" name="DOE"
                  value="2023-07-22"
                  min="2023-04-" max="2100-12-31">
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="phone">Contact info:</label><br>
                          <input type="tel" class="form-control w-50" name="contact" id="phone"
                            placeholder="+91" required>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="form-group">
                          <label for="inputAddress">Venue:</label>
                          <input type="text" class="form-control w-100" name='Venue'id="inputAddress"placeholder="1234 Main St">
                            <label for="name">Other Specific Requirement:</label><br>
                    <input type="text2" class="form-control w-45 " name="OSR" placeholder="name" required class="form-control">
                        </div>
                      </div>
                  <div class="clearfix">
                    <button type="submit" name="submit"  class="submitbtn mx-auto w-100">submit</button>
                  </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
              </form>
</div>
</div>
</form>
</body>