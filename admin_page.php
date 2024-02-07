<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $cont=$_POST['contact'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  $insert = "INSERT INTO `pro_o` (name,email, contact, state,city,address) VALUES('$name','$email','$cont','$state','$city','$address')";
  mysqli_query($conn, $insert);
  header('location:homepg.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Org-pro</title>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="homepg.php">Home</a>
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
   <title>Org page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="prof(org).css">

</head>
<body>
  <div class="card-wrap mx-auto w-50">
    <div class="container">
      <form action="admin_page.php" method='post'>
        <h1>Organization PROFILE</h1>
        <p>Please fill the below details details.</p>
        <hr>
        <div class="row">
          <div class="form-row">
            <div class="col">
              <b><label for="name">Name of organization:</label></b><br>
              <input type="text" name="name" class="form-control" placeholder="org" required class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <b><label for="inputEmail4">Email:</label></b><br>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="">
            <b><label for="phone">Office number:</label></b><br>
            <input type="tel" name="contact" class="form-control w-50" id="phone" placeholder="+91" required>
          </div>
        </div><br>
                 <div class=" form-row">
                    <b><label for="inputState">State:</label></b>
                      <select id="inputState" name="state" class="form-control w-50">
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                    </select>
                  </div><br>
                    <div class="">
                      <b><label for="validatioServer03">City:</label></b><br>
                      <input type="text3" name="city" class="form-control w-50" id="validationServer03" placeholder="City"><br>
                        <b><label for="validatioServer03">Office Address:</label></b><br>
                      <input type="text3" name="address" class="form-control w-50" id="validationServer03" placeholder="Address">
                    </div>
                </div>
                <div class="row">
                <div class="clearfix">
                <button type="submit" name="submit"  class="submitbtn mx-auto w-100">submit</button>
                </div>
              </div>
                <script
                  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                  crossorigin="anonymous"></script>
                  </form>
                </div>
      </div>
          </body>
</html>