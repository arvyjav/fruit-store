<?php
include "./inc/server.php";

$sql = "SELECT * FROM `apeshit5`";


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
            <li><a class="dropdown-item" href="#">Fruits</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logingoogle.php" tabindex="-1" aria-disabled="true">Account</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="card card-info">
    <div class="card-header bg-info mb-3">
        <h3 class="card-title">
            <i class="far fa-lemon"></i> Hans Fruits
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="addnew.php" class="btn btn-primary">
                    <i class="fas fa-user-ninja"></i>データの追加</a>
            </div>



            <br>

            <div class="mt-3">
                <table class="table table-striped table-dark table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">$</th>
                            <th scope="col">名前</th>
                            <th scope="col">候補者</th>
                            <th scope="col">出生地</th>
                            <th scope="col">生年月日</th>
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
                                    <td><?php echo $row['long_name'] ?></td>
                                    <td><?php echo $row['jabatan'] ?></td>
                                    <td><?php echo $row['birth_place'] ?></td>
                                    <td><?php echo $row['birth_date'] ?></td>

                                </tr>

                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>

            <p class="text-dark">Total: <?php echo mysqli_num_rows($result) ?></p>


        </div>
    </div>

    <!-- /.card-body -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>