<?php
  include "inc/server.php";


  if(isset($_GET['nomor'])) {
      $user_id = $_GET['nomor'];

      $sql = "DELETE FROM `apeshit2` WHERE `nomor` = '$user_id'";

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