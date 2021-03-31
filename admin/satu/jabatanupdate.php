<?php
include "inc/server.php";

if (isset($_POST['daftar'])) {
    $user_id = $_POST['user_id'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $deskripsi_jabatan = $_POST['deskripsi_jabatan'];
    $jam_kerja = $_POST['jam_kerja'];


    $sql = "UPDATE `apeshit4` SET `nama_jabatan`='$nama_jabatan',`deskripsi_jabatan`='$deskripsi_jabatan',`jam_kerja`='$jam_kerja' WHERE `angka`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Saved";
    } else {
        echo "Fuck" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['angka'])) {
    $user_id = $_GET['angka'];

    $sql = "SELECT * FROM `apeshit4` WHERE `angka`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama_jabatan = $row['nama_jabatan'];
            $deskripsi_jabatan = $row['deskripsi_jabatan'];
            $jam_kerja = $row['jam_kerja'];
            $angka = $row['angka'];
        

?>

        <form action="" method="POST" class="form-horizontal">
            <fieldset>
                <legend>Update Jabatan</legend>
                <div class="form-group">
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <input type="hidden" class="form-control" name="user_id" id="user_id"" value=" <?php echo $angka; ?>" required>
                        </div>
                    </div>
                    <label for="nama_jabatan" class="col-sm-2 control-label">직책 이름</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="직책 이름 입력" value="<?php echo $nama_jabatan; ?>" required>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-group">
                        <label for="deskripsi_jabatan" class="col-sm-2 control-label">기술</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi_jabatan" id="deskripsi_jabatan" placeholder="기술" value=" <?php echo $deskripsi_jabatan; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-group col-md-4">
                        <label for="jam_kerja">근무 시간</label>
                        <select id="jam_kerja" class="form-control" name="jam_kerja" required>
                            <option selected>고르다...</option>
                            <?php
                            //cek data yg dipilih sebelumnya
                            if ($row['jam_kerja'] == "12 Jam") echo "<option value='12 Jam' selected>12 Jam</option>";
                            else echo "<option value='12 Jam'>12 Jam</option>";

                            if ($row['jam_kerja'] == "8 Jam") echo "<option value='8 Jam' selected>8 Jam</option>";
                            else echo "<option value='8 Jam'>8 Jam</option>";

                            if ($row['jam_kerja'] == "14 Jam") echo "<option value='14 Jam' selected>14 Jam</option>";
                            else echo "<option value='14 Jam'>14 Jam</option>";

                            if ($row['jam_kerja'] == "6 Jam") echo "<option value='6 Jam' selected>6 Jam</option>";
                            else echo "<option value='6 Jam'>6 Jam</option>";
                            ?>

                        </select>
                    </div>
                </div>
                <div class="mt-3">

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="daftar" id="daftar" class="btn btn-primary">더하다</button>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>

<?php
        }
    } else {
        header('Location: index.php?page=jabatan-list');
    }
}
?>