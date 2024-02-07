<?php

@include 'config.php';
$query="select * from host";
$result=mysqli_query($conn,$query);
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/project/homepg.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://localhost/project/d_dets.php">Donor</a>
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
                <li>
                <a href="http://localhost/project/host.php" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">HOST</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" id="searchInput" onkeyup="searchCards()" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav> 
          </body>
    
    </head>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <body>
    <div class=" h1" style="margin-top:3%; margin-left: 38%;">EVENTS/CAMPS</div>
    
             <?php
              foreach(array_reverse($data) as $row)
              { 
             ?> 
               <?php echo"<div class='card mx-auto w-50 h-50 cardContainer'>" ?>
               <!-- <?php echo"<div class='d-flex flex-row-reverse'>"?> -->
                <!-- <?php echo "<div class=''>$row[DOE]</div>";?> -->
                <?php echo "<div class='card-header text-center' id='event'>$row[event]</div>";?>
                <?php echo "<div class='card-body'>"?>
                <?php echo " <h5 class=''>Contact:</h5>$row[contact]"; ?><br>
                <?php echo " <h5 class='mt-2'>Venue:</h5>$row[Venue]"; ?><br>
                <?php echo " <h5 class='mt-2'>Specification:</h5>$row[OSR]"; ?><br>
                <?php echo"</div>"?>
                <?php echo "<div class='card-footer text-center text-muted' id='DOE' >On: $row[DOE]</div>";?>
                <?php echo"</div>"?>
                <?php echo"</div>"?>
              <?php
              }
            ?>  
  </body>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
function searchCards() {
  // Retrieve user's search query
  var input, filter, cards, card, title, content, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  cards = document.getElementsByClassName("cardContainer");

  // Loop through all cards and hide those that do not match the search query
  for (i = 0; i < cards.length; i++) {
    card = cards[i];
    title = card.querySelector(".card-header");
    content = card.querySelector(".card-body");
    txtValue = title.textContent || title.innerText;
    txtValue += " " + (content.textContent || content.innerText);
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      card.style.display = "";
    } else {
      card.style.display = "none";
    }
  }
}
</script>
  </html>