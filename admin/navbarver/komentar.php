<?php
include "inc/server.php";

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

</body>

</html>
