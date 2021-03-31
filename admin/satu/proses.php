<?php
include "inc/server.php";

if (isset($_POST['Gas'])) {
    $user_id = $_POST['user_id'];
    $penerimaan = $_POST['penerimaan'];


    $sql = "UPDATE `apeshit5` SET `penerimaan`='$penerimaan'
     WHERE `id`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>
        Swal.fire({title: 'Agregar datos correctamente',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=visi-misi'
        ;}})</script>";;
    } else {
        echo "Fuck" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `apeshit5` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $penerimaan = $row['penerimaan'];
            $angka = $row['id'];

?>

            <div class="container">
                <div class="card-header text-white bg-success mb-3">
                    <h3 class="card-title">
                        <i class="far fa-lemon"></i> データを追加する
                    </h3>
                </div>
                <div class="mb-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">


                            <div class="form-row">
                                <div class="mt-3">
                                    <div class="form-group col-md-6">
                                        <input type="hidden" class="form-control" name="user_id" id="user_id" value=" <?php echo $angka; ?>" required>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Accept</label>
                                        <select id="penerimaan" name="penerimaan" class="form-control">
                                            <option selected>Choose...</option>

                                            <?php if ($row['penerimaan'] == "No Confirm") echo "<option value='No Confirm' selected>No Confirm</option>";
                                            else echo "<option value='No Confirm'>No Confirm</option>";
                                            if ($row['penerimaan'] == "Denied") echo "<option value='Denied' selected>Denied</option>";
                                            else echo "<option value='Denied'>Denied</option>";
                                            if ($row['penerimaan'] == "Accepted") echo "<option value='Accepted' selected>Accepted</option>";
                                            else echo "<option value='Accepted'>Accepted</option>"; ?>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-3">
                                <button type="submit" id="Gas" name="Gas" class="btn btn-warning" class="mt-3">Hit This Gas</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
<?php
        }
    } else {
        header('Location: index.php?page=jabatan-list');
    }
}
?>