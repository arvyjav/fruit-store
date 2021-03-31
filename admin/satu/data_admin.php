<?php
include "inc/server.php";

$sql = "SELECT * FROM `apeshit1`";


$result = $conn->query($sql);
?>
<div class="container">
    <div class="card">
        <div class="card-header bg-primary mb-3">
            <h5 class="card-title">
                <i class="fas fa-pepper-hot"></i>
                الفاكهة
            </h5>
        </div>
        <div class="card-body">
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <?php if ($data_level == "Admin") { ?>
                <a href="?page=daft-admin" class="btn btn-outline-primary">اضغط علي</a>

            <?php } elseif ($data_level == "User") { ?>
                .....
            <?php } ?>
        </div>
    </div>

    <div class="mt-3">
        <table class="table table-hover table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم</th>
                    <th scope="col">اسم المستخدم</th>
                    <th scope="col">مستوى</th>
                    <th scope="col">فعل</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <?php if($data_level == "Admin"){?>

                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['level'] ?></td>

                            <td>
                                <a href="?page=view-admin&id=<?php echo $row['id']; ?>" class="btn btn-info">رأي</a> &nbsp;
                                <a href="?page=admin-update&id=<?php echo $row['id']; ?>" class="btn btn-success">يحرر</a> &nbsp;
                                <a href="?page=admin-delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذا العنصر??')">حذف</a>
                            </td>
                        </tr>

                        <?php }elseif($data_level == "User"){?>

                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['level'] ?></td>

                            <td>
                                <a href="?page=view-admin&id=<?php echo $row['id']; ?>" class="btn btn-info">رأي</a> &nbsp;
                                <a href="?page=admin-update&id=<?php echo $row['id']; ?>" class="btn btn-success">يحرر</a> &nbsp;
                            </td>
                        </tr>
                        <?php } ?>

                <?php }
                } ?>


            </tbody>
        </table>
        <p class="text-warning">Total: <?php echo mysqli_num_rows($result) ?></p>

    </div>
</div>