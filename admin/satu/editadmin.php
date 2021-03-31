<?php
include "inc/server.php";

if (isset($_POST['Save'])) {
    $user_id = $_POST['user_id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];


    $sql = "UPDATE `apeshit1` SET `nama`='$nama',`username`='$username',`password`='$password',`level` ='$level' WHERE `id`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>
        Swal.fire({title: 'تم تحريره',text: '',icon: 'success',confirmButtonText: 'موافق'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=add-admin'
        ;}})</script>";
    } else {
        echo "Fuck" . $sql . "<br>" . $conn->error;
    }
}

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
            $numbr = $row['id'];
        

?>
        <form action="" method="POST">
            <fieldset>
                <legend>UPDATE CLASS</legend>
                <div class="form-row">
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <input type="hidden" class="form-control" name="user_id" id="user_id" value=" <?php echo $numbr; ?>" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="nama">تحديث الاسم</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Fruit Name" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="username">تحديث الاسم</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="password">تحديث التحرير</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Fruit Calories" value="<?php echo $password; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="mt-3">
                        <div class="form-group col-md-4">
                            <label for="level">Update Vitamin Fruits</label>
                            <select name="level" id="level" class="form-control">
                                <option selected>Choose...</option>
                                <?php
                                //cek data yg dipilih sebelumnya
                                if ($row['level'] == "Admin") echo "<option value='Admin' selected>Admin</option>";
                                else echo "<option value='Admin'>Admin</option>";

                                if ($row['level'] == "User") echo "<option value='User' selected>User</option>";
                                else echo "<option value='User'>User</option>";
                                ?>

                            </select>
                        </div>
                    </div> 
                <div class="mt-3">
                <input type="checkbox" onclick="myFunction()">عرض كلمة المرور

                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-warning" name="Save" id="Save">Slice The Fruits</button>
                </div>
            </fieldset>
        </form>
<?php
        }
    } else {
        header('Location: index.php?page=add-admin');
    }
}
?>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
