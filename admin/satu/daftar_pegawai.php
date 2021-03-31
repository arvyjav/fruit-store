<?php
include "inc/server.php";

if (isset($_POST['Gas'])) {
    $target = "furimages/" . basename($_FILES['photo']['name']);
    $photo = $_FILES['photo']['name'];
    $long_name = $_POST['long_name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $history_job = $_POST['history_job'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];

    $sql = "INSERT INTO `apeshit5`(`photo`,`long_name`,`address`,`telephone`,`email`,`history_job`,`birth_date`,`birth_place`)
    VALUES ('$photo','$long_name','$address','$telephone','$email','$history_job','$birth_date','$birth_place')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
        $msg = "<script>
        Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=tabel-peg'
        ;}})</script>";
    } else {
        $msg = "Failed";
    }
}
?>
<div class="container">
    <div class="card-header text-white bg-primary mb-3">
        <h3 class="card-title">
            <i class="far fa-lemon"></i> データを追加する
        </h3>
    </div>
    <div class="mb-4">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="long_name">ロングネーム</label>
                    <input type="text" class="form-control" id="long_name" placeholder="Enter Long Name" name="long_name" required>
                </div>
                <div class="mt-3">
                    <div class="form-group col-md-6">
                        <label for="address">住所</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group">
                    <label for="telephone">電話</label>
                    <input type="number" class="form-control" id="telephone" placeholder="Enter Telephone Number" name="telephone" required>
                </div>
            </div>
            <div class="mt-3">
                <div class="form-group">
                    <label for="email">電子メールアドレス</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email address" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="mt-3">
                    <div class="form-group col-md-6">
                        <label for="history_job">歴史の仕事</label>
                        <input type="text" class="form-control" id="history_job" name="history_job" placeholder="Enter History Jobs here If you mot have history job just type (-)" required>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-group col-md-2">
                        <label for="birth_date">誕生日</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Enter Birth Date" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="birth_place	">出生地</label>
                            <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Where You born at?" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-4">
                            <label for="jabatan">あなたがなりたいもの</label>
                            <select id="jabatan" class="form-control" name="jabatan" required>
                                <option selected>Choose...</option>
                                <option>OB</option>
                                <option>Seller</option>
                                <option>Security</option>
                                <option>Cashier</option>
                                <option>Programmer</option>

                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="customFile">写真をアップする</label>
                        <input type="file" class="form-control" id="photo" name="photo" />
                    </div>
                </div>
    
                <div class="mt-3">
                    <button type="submit" id="Gas" name="Gas" class="btn btn-primary" class="mt-3">Hit This Gas</button>

                </div>
        </form>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>