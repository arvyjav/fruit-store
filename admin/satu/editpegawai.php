<?php
include "inc/server.php";

if (isset($_POST['Gas'])) {
    $user_id = $_POST['user_id'];
    $long_name = $_POST['long_name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];
    $history_job = $_POST['history_job'];
    $jabatan = $_POST['jabatan'];
    $photo = $_FILES['photo']['name'];


    $sql = "UPDATE `apeshit5` SET `long_name`='$long_name',`address`='$address',`telephone`='$telephone'
    ,`birth_date`='$birth_date',`birth_place`='$birth_place',`history_job`='$history_job',`jabatan`='$jabatan',`photo`='$photo'
     WHERE `id`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        move_uploaded_file($_FILES['photo']['tmp_name'], "furimages/" . $_FILES["photo"]['name']);
        $_SESSION['success'] = "Edited";
        header('Location: ?page=tabel-peg');
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
            $long_name = $row['long_name'];
            $address = $row['address'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $birth_date = $row['birth_date'];
            $birth_place = $row['birth_place'];
            $history_job = $row['history_job'];
            $jabatan = $row['jabatan'];
            $photo = $row['photo'];
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
                            <div class="mt-3">
                                <div class="form-group col-md-6">
                                    <input type="hidden" class="form-control" name="user_id" id="user_id"" value=" <?php echo $angka; ?>" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="long_name">ロングネーム</label>
                                <input type="text" class="form-control" id="long_name" placeholder="Enter Long Name" name="long_name" required value="<?php echo $long_name; ?>">
                            </div>
                            <div class="mt-3">
                                <div class="form-group col-md-6">
                                    <label for="address">住所</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required value="<?php echo $address; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="form-group">
                                <label for="telephone">電話</label>
                                <input type="number" class="form-control" id="telephone" placeholder="Enter Telephone Number" name="telephone" required value="<?php echo $telephone; ?>">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="form-group">
                                <label for="email">電子メールアドレス</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email address" name="email" required value="<?php echo $email; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mt-3">
                                <div class="form-group col-md-6">
                                    <label for="history_job">歴史の仕事</label>
                                    <input type="text" class="form-control" id="history_job" name="history_job" placeholder="Enter History Jobs here If you mot have history job just type (-)" required value="<?php echo $history_job; ?>">
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-group col-md-2">
                                    <label for="birth_date">誕生日</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Enter Birth Date" required value="<?php echo $birth_date; ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="birth_place	">出生地</label>
                                        <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Where You born at?" required value="<?php echo $birth_place; ?>">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="form-group col-md-4">
                                        <label for="jabatan">あなたがなりたいもの</label>
                                        <select id="jabatan" class="form-control" name="jabatan" required value="<?php echo $jabatan ?>">
                                            <option selected>Choose...</option>

                                            <?php

                                            if ($row['jabatan'] == "OB") echo "<option value='OB' selected>OB</option>";
                                            else echo "<option value='OB'>OB</option>";

                                            if ($row['jabatan'] == "Seller") echo "<option value='Seller' selected>Seller</option>";
                                            else echo "<option value='Seller'>Seller</option>";

                                            if ($row['jabatan'] == "Security") echo "<option value='Security' selected>Security</option>";
                                            else echo "<option value='Security'>Security</option>";

                                            if ($row['jabatan'] == "Cashier") echo "<option value='Cashier' selected>Cashier</option>";
                                            else echo "<option value='Cashier'>Cashier</option>";

                                            if ($row['jabatan'] == "Programmer") echo "<option value='Programmer' selected>Programmer</option>";
                                            else echo "<option value='Cashier'>Programmer</option>";
                                            ?>


                                        </select>
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
                            <div class="form-group">

                            </div>
                            <div class="mt-3">
                                <button type="submit" id="Gas" name="Gas" class="btn btn-warning" class="mt-3">Hit This Gas</button>

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