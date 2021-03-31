<?php
  include "inc/server.php";


  if(isset($_GET['angka'])) {
      $user_id = $_GET['angka'];

      $sql = "DELETE FROM `apeshit4` WHERE `angka` = '$user_id'";

      $result = $conn->query($sql);

      if($result == TRUE){
          echo "<script>
          Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value) {window.location = 'index.php?page=fruits-list'
          ;}})</script>";
      }else{
          echo "Fuck". $sql . "<br>". $conn->error;
      }
  }
?>