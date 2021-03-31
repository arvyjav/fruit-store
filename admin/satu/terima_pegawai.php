<?php
include "inc/server.php";

if (isset($_POST['Gas'])) {
    $target = "furimages/" .basename($_FILES['photo']['name']);
    $photo = $_FILES['photo']['name'];
    $long_name = $_POST['long_name'];
    $adress = $_POST['adress'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $fav_fruits = $_POST['fav_fruits'];
    $born_date = $_POST['born_date'];
    $born_place = $_POST['born_place'];

    $sql = "INSERT INTO `apeshit2`(`photo`,`long_name`,`adress`,`telephone`,`email`,`fav_fruits`,`born_date`,`born_place`)
    VALUES ('$photo','$long_name','$adress','$telephone','$email','$fav_fruits','$born_date','$born_place')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
         echo "<script>
        Swal.fire({title: 'Agregar datos correctamente',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=karyawan-acc'
        ;}})</script>";
    } else {
        $msg = "Failed";
    }
}
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
                    <label for="long_name">Nombre</label>
                    <input type="text" class="form-control" name="long_name" id="long_name" placeholder="Cuál es tu nombre" required>
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="adress">Dirección</label>
                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Dirección" required>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="number" class="form-control" name="telephone" id="telephone" placeholder="Número de teléfono" required>
            </div>
        </div>
        <div class="mt-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Introducir la dirección de correo electrónico" required>
            </div>
        </div>
        <div class="form-row">
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="fav_fruits">Frutas Favoritas</label>
                    <input type="text" class="form-control" name="fav_fruits" id="fav_fruits" placeholder="Frutas Favoritas" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="mt-3">
                <div class="form-group col-md-6">
                    <label for="born_place">Lugar de nacimiento</label>
                    <input type="text" class="form-control" name="born_place" id="born_place" placeholder="Lugar de nacimiento" required>
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group col-md-2">
                    <label for="born_date">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="born_date" id="born_date" required>
                </div>
            </div>

            <div class="mt-3">
                <label class="form-label" for="customFile">写真をアップする</label>
                <input type="file" class="form-control" id="photo" name="photo" />
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" id="Gas" name="Gas" class="btn btn-primary">Solo entra esto</button>
        </div>
    </form>
</div>