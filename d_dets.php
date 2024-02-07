<?php

@include 'config.php';
$sql = "SELECT name, gender, age, bloodgrp, contact, city,alcoholic FROM pro_d ORDER BY age ASC";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Donor details</title>
    <link rel="stylesheet" href="table.css">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/project/homepg.php">Home</a>
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
                  <li><a class="dropdown-item" href="http://localhost/project/register_form.php">Login</a></li>
                    <li><a class="dropdown-item" href="http://localhost/project/login_form.php">Sign up</a></li>  
                  </ul>
                </li>
                <li>
                <a href="http://localhost/project/host.php" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">HOST</a>
                </li>
              </ul>
              <form class="d-flex ms-3">
                <input class="form-control me-2" type="search" id="searchInput" onkeyup="searchTable()" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav> 
        <script
                  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                  crossorigin="anonymous"></script>
          </body>
    
<body>
<div class=" h1" style="margin-top:3%; margin-left: 38%; margin-right: 39%">DONOR DETAILS</div>
<?php

// Display the data in a table format
if (mysqli_num_rows($result) > 0) {
echo "<table id='myTable'>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Contact</th>
            <th>City</th>
            <th>Alcholic</th>
        </tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['age']."</td>
            <td>".$row['bloodgrp']."</td>
            <td>".$row['contact']."</td>
            <td>".$row['city']."</td>
            <td>".$row['alcoholic']."</td>
          </tr>";
}
echo "</table>";}
else {
  echo "No results found.";
}
?>
</div>
<script>
function searchTable() {
  // Retrieve user's search query
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  
  // Loop through all table rows and hide those that do not match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td");
    for (var j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        break;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
