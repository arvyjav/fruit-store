<?php
include "inc/server.php";

if (isset($_POST['Save'])) {
    $nama_jabatan = $_POST['nama_jabatan'];
    $deskripsi_jabatan = $_POST['deskripsi_jabatan'];
    $jam_kerja = $_POST['jam_kerja'];

    $sql = "INSERT INTO `apeshit4`(`nama_jabatan`,`deskripsi_jabatan`,`jam_kerja`)
    VALUES ('$nama_jabatan','$deskripsi_jabatan','$jam_kerja')";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>
Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
}).then((result) => {if (result.value) {window.location = 'index.php?page=jabatan-list'
;}})</script>";
    } else {
        echo "<script>
Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
}).then((result) => {if (result.value)
  {window.location = 'index.php?page=jabatan-list;
  }
})</script>" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<div class="container">
    <form action="" method="POST">
        <div class="form-row">
            <div class="mt-3">
            <div class="form-group">
                <label for="nama_jabatan" class="col-sm-2 control-label">직책 이름</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="직책 이름 입력" required>
                </div>
            </div>
            </div>
            <div class="mt-3">
                <div class="form-group">
                    <label for="deskripsi_jabatan" class="col-sm-2 control-label">기술</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi_jabatan" id="deskripsi_jabatan" placeholder="기술" required>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <div class="form-group col-md-4">
                    <label for="jam_kerja">Semoga Bisa</label>
                    <select name="jam_kerja" id="jam_kerja" class="form-control">
                        <option selected>고르다...</option>
                        <option>12 Jam</option>
                        <option>8 Jam</option>
                        <option>14 Jam</option>
                        <option>6 Jam</option>

                    </select>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary" name="Save" id="Save">더하다</button>
            </div>
        </div>
    </form>
</div>
