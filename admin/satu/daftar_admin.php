<?php
include "inc/server.php";

if (isset($_POST['send'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $Quer = mysqli_query($conn, "SELECT * FROM `apeshit1` WHERE username = '$username'");
  if(mysqli_num_rows($Quer) > 0){

    echo "<script>Swal.fire(
      'Ada Kesamaan?',
      'Username Tdk Bisa sama Bro!!!!',
      'question'
    )</script>";
  }else{
   
  $sql = "INSERT INTO `apeshit1`(`nama`,`username`,`password`,`level`)
    VALUES ('$nama','$username','$password','$level')";


  $result = $conn->query($sql);

  echo "<script>
  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
  }).then((result) => {if (result.value) {window.location = 'index.php?page=add-admin'
  ;}})</script>";
}
echo "<script>
    Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
      {window.location = 'index.php?page=add-admin;
      }
    })</script>";
  $conn->close();
}
?>
<div class="container">
<form action="" method="POST">
  <div class="mt-3">
  <div class="form-group">
    <label for="nama">اسمك</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="أدخل الاسم" required >
  </div>
  </div>
  <div class="mt-3">
  <div class="form-group">
    <label for="username">اسم المستخدم الخاص بك</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="ادخل اسم المستخدم" required>
  </div>
  </div>
  <div class="mt-3">
  <div class="form-group">
    <label for="password">كلمة السر خاصتك</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="أدخل كلمة المرور" required>
    <small id="password" class="form-text text-muted">لا تشارك كلمة مرورك مع أشخاص آخرين</small>
  </div>
  </div>
  <div class="mt-3">
  <div class="form-group col-md-4">
      <label for="level">مستوى</label>
      <select id="level" name="level" class="form-control">
        <option selected>موقعك..</option>
        <option>Admin</option>
        <option>User</option>
      </select>
    </div>
  </div>
  <div class="mt-3">
  <input type="checkbox" onclick="myFunction()">عرض كلمة المرور
  </div>
  <div class="mt-3">
  <button type="submit" id="send" name="send" class="btn btn-outline-primary">إرسال</button>
  </div>
</form>
</div>

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
