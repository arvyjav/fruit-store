<?php
include "inc/server.php";

if (isset($_POST['Gas'])) {
    $user_id = $_POST['user_id'];
    $long_name = $_POST['long_name'];
    $adress = $_POST['adress'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $born_date = $_POST['born_date'];
    $born_place = $_POST['born_place'];
    $fav_fruits = $_POST['fav_fruits'];
    $photo = $_FILES['photo']['name'];


    $sql = "UPDATE `apeshit2` SET `long_name`='$long_name',`adress`='$adress',`telephone`='$telephone'
    ,`born_date`='$born_date',`born_place`='$born_place',`fav_fruits`='$fav_fruits',`photo`='$photo'
     WHERE `nomor`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        move_uploaded_file($_FILES['photo']['tmp_name'], "furimages/" . $_FILES["photo"]['name']);
        $_SESSION['success'] = "Edited";
        header('Location: ?page=karyawan-acc');
    } else {
        echo "Fuck" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['nomor'])) {
    $user_id = $_GET['nomor'];

    $sql = "SELECT * FROM `apeshit2` WHERE `nomor`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $long_name = $row['long_name'];
            $adress = $row['adress'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $born_date = $row['born_date'];
            $born_place = $row['born_place'];
            $fav_fruits = $row['fav_fruits'];
            $photo = $row['photo'];
            $angka = $row['nomor'];
      

?>
<div class="container">
    <div class="card-header text-white bg-primary mb-3">
        <h3 class="card-title">
            <i class="fas fa-carrot"></i>
            Formulario de registro
        </h3>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
                        <div class="mt-3">
                            <div class="form-group col-md-6">
                                <input type="hidden" class="form-control" name="user_id" id="user_id" value=" <?php echo $row['nomor']; ?>" required>
                            </div>
                        </div>
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="long_name">Nombre</label>
                    <input type="text" class="form-control" name="long_name" id="long_name" placeholder="Cuál es tu nombre" required value="<?php echo $row['long_name']; ?>">
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="adress">Dirección</label>
                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Dirección" required value="<?php echo $row['adress']; ?>">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="number" class="form-control" name="telephone" id="telephone" placeholder="Número de teléfono" required  value="<?php echo $row['telephone']; ?>">
            </div>
        </div>
        <div class="mt-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Introducir la dirección de correo electrónico" required  value="<?php echo $row['email']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="fav_fruits">Frutas Favoritas</label>
                    <input type="text" class="form-control" name="fav_fruits" id="fav_fruits" placeholder="Frutas Favoritas" required  value="<?php echo $row['fav_fruits']; ?>">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="born_place">Lugar de nacimiento</label>
                    <input type="text" class="form-control" name="born_place" id="born_place" placeholder="Lugar de nacimiento" required  value="<?php echo $row['born_place']; ?>">
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group col-md-2">
                    <label for="born_date">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="born_date" id="born_date" required  value="<?php echo $row['born_date']; ?>">
                </div>
            </div>

            <div class="mt-3">
                                <label class="col-sm-2 col-form-label">写真をアップする</label>
                                        <div class="col-sm-6">
                                            <img src="furimages/<?php echo $row['photo']; ?>" width="160px" />
                                        </div>
                                </div>
                                <div class="mt-3">
                                <input type="file" class="form-control" id="photo" name="photo" />
                                </div>
        </div>

        <div class="mt-3">
            <button type="submit" id="Gas" name="Gas" class="btn btn-primary">Solo entra esto</button>
        </div>
    </form>
</div>
<?php
  }
    } else {
        header('Location: index.php?page=jabatan-list');
    }
}
?>