<?php
include "inc/server.php";


if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `apeshit1` WHERE `id`='$user_id'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama = $row['nama'];
            $username = $row['username'];
            $password = $row['password'];
            $level = $row['level'];
        }
?>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pegawai</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <tbody>
                    
                                <tr>
                                    <td style="width: 150px">
                                        <b>اسم</b>
                                    </td>
                                    <td>:
                                        <?php echo $nama; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>اسم المستخدم</b>
                                    </td>
                                    <td>:
                                        <?php echo $username; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>كلمة المرور</b>
                                    </td>
                                    <td>:
                                        <?php echo $password; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>مستوى</b>
                                    </td>
                                    <td>:
                                        <?php echo $level; ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-footer">
                            <a href="?page=add-admin" class="btn btn-warning">خلف</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>