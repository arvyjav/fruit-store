<?php
include "inc/server.php";

if (isset($_GET['nomor'])) {
    $user_id = $_GET['nomor'];

    $sql = "SELECT * FROM `apeshit2` WHERE `nomor`='$user_id'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['long_name'];
            $adress = $row['adress'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $born_date = $row['born_date'];
            $born_place = $row['born_place'];
            $fav_fruits = $row['fav_fruits'];
            $photo = $row['photo'];
        
?>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-header text-white bg-primary mb-3">
                        <h3 class="card-title">Toda la información</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td style="width: 150px">
                                        <b>Nombre</b>
                                    </td>
                                    <td>:
                                        <?php echo $name; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>Dirección</b>
                                    </td>
                                    <td>:
                                        <?php echo $adress; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>Número de teléfono</b>
                                    </td>
                                    <td>:
                                        <?php echo $telephone; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>Dirección de correo electrónico</b>
                                    </td>
                                    <td>:
                                        <?php echo $email; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>Fecha de nacimiento</b>
                                    </td>
                                    <td>:
                                        <?php echo $born_date; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>Lugar de nacimiento</b>
                                    </td>
                                    <td>:
                                        <?php echo $born_place; ?>
                                    </td>
                                </tr>
            
                                <tr>
                                    <td style="width: 150px">
                                        <b>Frutas Favoritas</b>
                                    </td>
                                    <td>:
                                        <?php echo $fav_fruits; ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-footer">
                            <a href="?page=karyawan-acc" class="btn btn-warning">Atrás</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-success">
                    <div class="card-header text-white bg-success mb-3">
                        <center>
                            <h3 class="card-title">
                            Perfil
                            </h3>
                        </center>

                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <td>
                            <img src="furimages/<?php echo $photo ?>" width="280px" />
                            </td>
                        </div>

                        <div class="mt-2">
                        <h3 class="profile-username text-center">

                            <?php echo $name; ?>
                            -
                            <?php echo $fav_fruits; ?>
                        </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
}
    }
}
?>