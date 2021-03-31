<?php
include "inc/server.php";

$sql = "SELECT * FROM `apeshit2`";


$result = $conn->query($sql);
?>

<div class="container">

    <div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="?page=add-karyawan-acc" class="btn btn-primary">
            <i class="fas fa-user-ninja"></i>Agregar nuevos datos</a>
  </div>

</div>
    <div class="mt-3">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Email</th>
                    <th scope="col">Frutas Favoritas</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                       <?php if($data_level == "Admin"){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['long_name'] ?></td>
                            <td>
                            <img src="furimages\<?php echo $row['photo'] ?>" width="70px" />
                            </td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['fav_fruits'] ?></td>
                            <td>

                                <a href="?page=view-terima&nomor=<?php echo $row['nomor']; ?>" class="btn btn-outline-info">Vista</a> 
                                <a href="?page=penerima&nomor=<?php echo $row['nomor']; ?>" class="btn btn-outline-success">Editar</a>
                                <a href="?page=del-terima&nomor=<?php echo $row['nomor']; ?>" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar estos datos??')">Eliminar</a>

                            </td>
                        </tr>

                       <?php }elseif($data_level == "User"){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['long_name'] ?></td>
                            <td>
                            <img src="furimages\<?php echo $row['photo'] ?>" width="70px" />
                            </td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['fav_fruits'] ?></td>
                            <td>

                                <a href="?page=view-terima&nomor=<?php echo $row['nomor']; ?>" class="btn btn-outline-info">Vista</a> 
        

                            </td>
                        </tr>

                       <?php } ?>
                <?php }
                }
                ?>

            </tbody>
        </table>
        <p class="text-success">Total: <?php echo mysqli_num_rows($result) ?></p>

    </div>
</div>