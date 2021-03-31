<?php
include "inc/server.php";

$sql = "SELECT * FROM `apeshit3`";


$result = $conn->query($sql);
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexgoogle.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Help.php">Help</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            These
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="comment1.php">Action</a></li>
            <li><a class="dropdown-item" href="reg.php">Registration here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="buahtable.php">Fruits</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logingoogle.php" tabindex="-1" aria-disabled="true">Account</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="card">
  <h5 class="card-header text-white bg-primary mb-3">Fruits</h5>
  <div class="card-body">
    <h5 class="card-title">All Fruits Data</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>


    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fruit Name</th>
            <th scope="col">Fruit Cal</th>
            <th scope="col">Vitamin</th>
            <th scope="col">Protein</th>
            <th scope="col">Total fat</th>
            <th scope="col">Cholesterol</th>
            <th scope="col">Sodium</th>
            <th scope="col">Potassium</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['fruit_name'] ?></td>
                <td><?php echo $row['fruit_calories'] ?></td>
                <td><?php echo $row['vitamin_fruits'] ?></td>
                <td><?php echo $row['Protein'] ?></td>
                <td><?php echo $row['Total_Fat'] ?></td>
                <td><?php echo $row['Cholesterol'] ?></td>
                <td><?php echo $row['Sodium'] ?></td>
                <td><?php echo $row['Potassium'] ?></td>
        
              </tr>

        
        <?php }
        }
        ?>


      </tbody>
    </table>
    <p class="text-primary">Total: <?php echo mysqli_num_rows($result) ?></p>

</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>