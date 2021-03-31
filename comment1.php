<?php
include "./inc/server.php";

if (isset($_POST['send'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";

	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>
		Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value) {window.location = 'index.php?page=comm'
		;}})</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Comment System in PHP - Pure Coding</title>
</head>

<body>
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
            <li><a class="dropdown-item" href="#">Registration here</a></li>
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

	<div class="container">
    <form action="" method="POST" class="form">
		<div class="row">
			<div class="col">
				<label for="exampleFormControlInput1">Name</label>

				<input type="text" id="name" name="name" class="form-control" placeholder="First name">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" id="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>

			<div class="form-group">
				<label for="exampleFormControlTextarea1">Example textarea</label>
				<textarea class="form-control" id="comment" name="comment" rows="7" type="disabled"></textarea>
			</div>
			<div class="mt-3">
				<button type="submit" name="send" id="send" class="btn btn-warning">Hit This </button>
			</div>
	</form>
	<div class="prev-comments">
		<?php

		$sql = "SELECT * FROM comments";
		$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
				<div class="mt-3">
				<div class="card" style="width: 100%;" rows="3">
					<div class="card-body">
						<h5 class="card-title"><?php echo $row['name']; ?></h5>
						<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['email']; ?></h6>
				        <p class="card-text"><?php echo $row['comment']; ?></p>
					
					</div>
				</div>
				</div>
		<?php

			}
		}

		?>
	</div>
    </div>

</body>

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
