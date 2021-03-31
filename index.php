<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
  header("location: login.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_nama = $_SESSION["ses_nama"];
  $data_user = $_SESSION["ses_username"];
  $data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "./inc/server.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Side Navigation Buah</title>
  <link rel="icon" href="admin\satu\proses\gambar\df.jpg">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="package\dist\sweetalert2.min.js"></script>
<link rel="stylesheet" href="package\dist\sweetalert2.min.css">

</head>

<body>

  <div class="wrapper">
    <div class="sidebar">
      <h2>Sidebar</h2>

      <ul>

        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="?page=homepage-adds"><i class="fas fa-user"></i>Profile</a></li>
        <li><a href="?page=visi-misi"><i class="fas fa-address-card" class="nav-links"></i>About</a></li>
        <li><a href="?page=karyawan-acc"><i class="fas fa-table"></i>Members</a></li>
        <li><a href="?page=jabatan-list"><i class="fas fa-blog"></i>Jabatan List</a></li>
        <li><a href="?page=tabel-peg"><i class="fas fa-address-book"></i>Recruit
            New Members</a></li>
        <li><a href="?page=add-admin"><i class="fas fa-map-pin"></i>Data Admin</a></li>
        <li><a a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php"><i class="fas fa-power-off"></i>Logout</a></li>

      </ul>
      <div class="social_media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
      </div>
    </div>
    <div class="main_content">
      <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="?page=comm">Comment</a>
              <a class="nav-item nav-link" href="?page=fruits-list">All Fruits</a>
            </div>
          </div>
          <a class="nav-item nav-link" href="#"> <?php echo $_SESSION['ses_level']; ?></a>
        </nav>
      </div>


      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- /. WEB DINAMIS DISINI ############################################################################### -->
      
          <div class="container-fluid">
            <?php
            if (isset($_GET['page'])) {
              $buah = $_GET['page'];

              switch ($buah) {
                  //Klik Halaman Home Pengguna
                case 'admin':
                  include "home/admin.php";
                  break;
                case 'user':
                  include "home/user.php";
                  break;

                  //No Satu
                case 'homepage-adds':
                  include "admin/satu/cover.php";
                  break;
                case 'visi-misi':
                  include "admin/satu/vision&mission.php";
                  break;
                case 'form-peg':
                  include "admin/satu/daftar_pegawai.php";
                  break;
                case 'tabel-peg':
                  include "admin/satu/tabel_peg.php";
                  break;
                case 'karyawan-acc':
                  include "admin/satu/terima.php";
                  break;
                case 'add-karyawan-acc':
                  include "admin/satu/terima_pegawai.php";
                  break;
                case 'jabatan-list':
                  include "admin/satu/jabatan.php";
                  break;
                case 'add-jabatan':
                  include "admin/satu/daftar_jabatan.php";
                  break;
                case 'add-admin':
                  include "admin/satu/data_admin.php";
                  break;
                case 'daft-admin':
                  include "admin/satu/daftar_admin.php";
                  break;
                case 'view-admin':
                  include "admin/satu/view_admin.php";
                  break;
                case 'jabatan-update':
                  include "admin/satu/jabatanupdate.php";
                  break;
                case 'jabatan-delete':
                  include "admin/satu/jabatandelete.php";
                  break;
                case 'admin-update':
                  include "admin/satu/editadmin.php";
                  break;
                case 'admin-delete':
                  include "admin/satu/deleteadmin.php";
                  break;
                case 'pegawai-view':
                  include "admin/satu/viewpegawai.php";
                  break;
                case 'pegawai-update':
                  include "admin/satu/editpegawai.php";
                  break;
                case 'pegawai-delete':
                  include "admin/satu/delpegawai.php";
                  break;
                case 'vision':
                  include "admin/satu/visi.php";
                  break;
                case 'mission':
                  include "admin/satu/misi.php";
                  break;
                case 'view-terima':
                  include "admin/satu/terimaview.php";
                  break;
                case 'penerima':
                  include "admin/satu/penerima.php";
                  break;
                case 'del-terima':
                  include "admin/satu/terimadel.php";
                  break;
                case 'pros':
                  include "admin/satu/proses.php";
                  break;

                  //No Dua
                case 'comm':
                  include "admin/navbarver/komentar.php";
                  break;
                case 'fruits-list':
                  include "admin/navbarver/allfruits.php";
                  break;
                case 'add-fruit':
                  include "admin/navbarver/fruits_register.php";
                  break;
                case 'update-fruit':
                  include "admin/navbarver/updatefruits.php";
                  break;
                case 'del-fruit':
                  include "admin/navbarver/deletefruits.php";
                  break;

                  //Login Sosmed
                case 'twitter':
                  include "logintwitter.php";
                  break;
                case 'login':
                  include "RegisterUser/login.php";
                  break;


                  //default
                default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;
              }
            } else {
              if ($data_level == "Admin") {
                include "home/admin.php";
              } elseif ($data_level == "User") {
                include "home/user.php";
              }
            }
            ?>

          </div>
        </section>
        <!-- /.content -->

      </div>

      <div class="mt-2">

        <div class="footer">
          <div class="card text-center">
            <div class="card-header">
              Hans Fruit Shop
            </div>
            <div class="card-body">
              <h5 class="card-title">Special Shopping Website</h5>
              <p class="card-text">With Fresh Fruits and 90% Of all Species Fruits, with Cheap Price .</p>
              <a type="submit" class="btn btn-primary" href="#">Rules Here</a>
              <div class="mt-2">
                <p><i class="fas fa-hands-wash">During Covid-19 Pandemic, Don't forget Wash Your Hand</i></p>

              </div>
            </div>
            <div class="card-footer text-muted">
              Last Updated 2 days ago
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>



</body>

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>