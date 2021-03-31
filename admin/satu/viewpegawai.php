<?php
include "inc/server.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `apeshit5` WHERE `id`='$user_id'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $long_name = $row['long_name'];
            $address = $row['address'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $birth_date = $row['birth_date'];
            $birth_place = $row['birth_place'];
            $history_job = $row['history_job'];
            $jabatan = $row['jabatan'];
            $photo = $row['photo'];
        }
?>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-header text-white bg-primary mb-3">
                        <h3 class="card-title">詳細すべて</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td style="width: 150px">
                                        <b>名前</b>
                                    </td>
                                    <td>:
                                        <?php echo $long_name; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>住所</b>
                                    </td>
                                    <td>:
                                        <?php echo $address; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>電話番号</b>
                                    </td>
                                    <td>:
                                        <?php echo $telephone; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>電子メールアドレス</b>
                                    </td>
                                    <td>:
                                        <?php echo $email; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>誕生日</b>
                                    </td>
                                    <td>:
                                        <?php echo $birth_date; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>出生地</b>
                                    </td>
                                    <td>:
                                        <?php echo $birth_place; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>歴史の仕事</b>
                                    </td>
                                    <td>:
                                        <?php echo $history_job; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 150px">
                                        <b>ポジション</b>
                                    </td>
                                    <td>:
                                        <?php echo $jabatan; ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-footer">
                            <a href="?page=tabel-peg" class="btn btn-warning">バック</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-success">
                    <div class="card-header text-white bg-success mb-3">
                        <center>
                            <h3 class="card-title">
                            写真
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

                            <?php echo $long_name; ?>
                            -
                            <?php echo $jabatan; ?>
                        </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>