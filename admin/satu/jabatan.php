<?php
include "inc/server.php";

$sql = "SELECT * FROM `apeshit4`";


$result = $conn->query($sql);
?>

<div class="container">
    <div class="card card-info">
        <div class="card-header bg-info mb-3">
            <h3 class="card-title">
                <i class="fas fa-apple-alt"></i> 위치 목록
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <a href="?page=add-jabatan" class="btn btn-primary">
                        <i class="fas fa-user-ninja"></i>데이터 추가</a>

                </div>

                <br>
                <table class="table table-success table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php if ($data_level == "Admin") { ?>

                                <th scope="col">#</th>
                                <th scope="col">위치</th>
                                <th scope="col">설명</th>
                                <th scope="col">일하는 시간</th>
                                <th scope="col">동작</th>


                            <?php } elseif ($data_level == "User") { ?>
                                <th scope="col">#</th>
                                <th scope="col">위치</th>
                                <th scope="col">설명</th>
                                <th scope="col">일하는 시간</th>
                                <th scope="col">동작</th>


                            <?php } ?>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                       <?php if($data_level == "Admin"){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_jabatan'] ?></td>
                            <td><?php echo $row['deskripsi_jabatan'] ?></td>
                            <td><?php echo $row['jam_kerja'] ?></td>
                            <td>
                                <a href="?page=jabatan-update&angka=<?php echo $row['angka']; ?>" class="btn btn-success">편집하다</a> &nbsp;
                                <a href="?page=jabatan-delete&angka=<?php echo $row['angka']; ?>" class="btn btn-danger" onclick="return confirm('이 데이터를 삭제 하시겠습니까??')">지우다</a>
                            </td>

                        </tr>

                       <?php }elseif($data_level == "User") {?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_jabatan'] ?></td>
                            <td><?php echo $row['deskripsi_jabatan'] ?></td>
                            <td><?php echo $row['jam_kerja'] ?></td>
                            <td>
                                <a href="?page=jabatan-update&angka=<?php echo $row['angka']; ?>" class="btn btn-success">편집하다</a> &nbsp;
                            </td>

                        </tr>

                       <?php } ?>
                <?php }
                            }
                ?>


                    </tbody>
                </table>
                <p class="text-primary">Total: <?php echo mysqli_num_rows($result) ?></p>



            </div>
        </div>
        <!-- /.card-body -->
    </div>