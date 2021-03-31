<?php
include "./inc/server.php";

?>


<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="admin\satu\proses\csds\php.png">
    <script src="package\dist\sweetalert2.min.js"></script>
<link rel="stylesheet" href="package\dist\sweetalert2.min.css">

    <title>Hello, world!</title>
</head>

<body>

    <div id="container">
        <div id="header">
            <a href="index.php">
                <img src="admin\satu\proses\csds\php.png">
            </a>
            <h1>Hans Fruit</h1>
            <p>Jalan Sukun Raya 9, Besito, Gebog, Kudus</p>
        </div>
    </div>

    <div id="container2">
        <div id="body">

            <header>
                <h3>Login</h3>
            </header>
            <form action="" method="POST">
                <form>
                    <p>
                        <label for="nama"></label>
                        <input type="text" name="username" id="username" placeholder="Nama Lengkap" pattern="[a-zA-Z]+" autocomplete="off" required />
                    </p>
                    <p>
                        <label for="alamat"></label>
                        <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" />
                    </p>
                    <p><a href="logingoogle.php">Without Account Here!!</a></p>

                    <p>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </p>
                    <p>
                        <input type="submit" name="daftar" id="daftar" class="registerbtn" value="Daftar" />
                    </p>
                </form>
        </div>
    </div>

    <div id="footer">

        <div id="alamat">
            <p style="color: rgb(133, 133, 173); font-size: 15px;">Alamat</p>
            <p style="margin:0;">Jalan Sukun Raya 9, Besito, Gebog,</p>
            <p>Kudus, Jawa Tengah 59333</p>
        </div>

        <div id="kontak">
            <p style="color: rgb(133, 133, 173); font-size: 15px;">Contact Person</p>

        </div>



        <div id="copyright">
            <p>Copyright © 2021, Hans Fruit Web Dev</p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?php


if (isset($_POST['daftar'])) {
    //anti inject sql
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //query login
    $sql_login = "SELECT * FROM apeshit1 WHERE BINARY username='$username' AND password='$password'";
    $query_login = mysqli_query($conn, $sql_login);
    $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
    $jumlah_login = mysqli_num_rows($query_login);


    if ($jumlah_login == 1) {
        session_start();
        $_SESSION["ses_id"] = $data_login["id"];
        $_SESSION["ses_nama"] = $data_login["nama"];
        $_SESSION["ses_username"] = $data_login["username"];
        $_SESSION["ses_password"] = $data_login["password"];
        $_SESSION["ses_level"] = $data_login["level"];

        header('Location: index.php');
    } else {
       echo "<script>Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!'
       </a>'
      })</script>";
    }
}

?>