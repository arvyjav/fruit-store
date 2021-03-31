<?php
include "inc/server.php";

if (isset($_POST['Save'])) {
    $user_id = $_POST['user_id'];
    $fruit_name = $_POST['fruit_name'];
    $fruit_calories = $_POST['fruit_calories'];
    $vitamin_fruits = $_POST['vitamin_fruits'];
    $Protein = $_POST['Protein'];
    $Total_Fat = $_POST['Total_Fat'];
    $Cholesterol = $_POST['Cholesterol'];
    $Sodium = $_POST['Sodium'];
    $Potassium = $_POST['Potassium'];


    $sql = "UPDATE `apeshit3` SET `fruit_name`='$fruit_name',`fruit_calories`='$fruit_calories',`vitamin_fruits`='$vitamin_fruits',`Protein` ='$Protein',`Total_Fat`='$Total_Fat'
    ,`Cholesterol`='$Cholesterol',`Sodium`='$Sodium',`Potassium`='$Potassium' WHERE `numbr`='$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Saved";
    } else {
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'</a>'
          })</script>" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['numbr'])) {
    $user_id = $_GET['numbr'];

    $sql = "SELECT * FROM `apeshit3` WHERE `numbr`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fruit_name = $row['fruit_name'];
            $fruit_calories = $row['fruit_calories'];
            $vitamin_fruits = $row['vitamin_fruits'];
            $Protein = $row['Protein'];
            $Total_Fat = $row['Total_Fat'];
            $Cholesterol = $row['Cholesterol'];
            $Sodium = $row['Sodium'];
            $Potassium = $row['Potassium'];
            $numbr = $row['numbr'];
        

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
                            <label for="fruit_name">Update Fruit Name</label>
                            <input type="text" class="form-control" name="fruit_name" id="fruit_name" placeholder="Enter Fruit Name" value="<?php echo $fruit_name; ?>" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="fruit_calories">Update Fruit Calories</label>
                            <input type="text" class="form-control" name="fruit_calories" id="fruit_calories" placeholder="Enter Fruit Calories" value="<?php echo $fruit_calories; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-group col-md-2">
                        <label for="Total_Fat">Update Total Fat Fruits</label>
                        <input type="text" class="form-control" name="Total_Fat" id="Total_Fat" placeholder="Enter Total Fat Fruits" value="<?php echo $Total_Fat; ?>" required>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="form-group col-md-2">
                        <label for="Cholesterol">Update Cholesterol Fruits</label>
                        <input type="text" class="form-control" name="Cholesterol" id="Cholesterol" placeholder="Enter Cholesterol Fruits" value="<?php echo $Cholesterol; ?>" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="mt-3">
                        <div class="form-group col-md-6">
                            <label for="Potassium">Update Potassium Fruits</label>
                            <input type="text" class="form-control" name="Potassium" id="Potassium" placeholder="Enter Potassium" value="<?php echo $Potassium; ?>" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-4">
                            <label for="vitamin_fruits">Update Vitamin Fruits</label>
                            <select name="vitamin_fruits" id="vitamin_fruits" class="form-control">
                                <option selected>Choose...</option>
                                <?php
                                //cek data yg dipilih sebelumnya
                                if ($row['vitamin_fruits'] == "Vitamin A") echo "<option value='Vitamin A' selected>Vitamin A</option>";
                                else echo "<option value='Vitamin A'>Vitamin A</option>";

                                if ($row['vitamin_fruits'] == "Vitamin B") echo "<option value='Vitamin B' selected>Vitamin B</option>";
                                else echo "<option value='Vitamin B'>Vitamin B</option>";

                                if ($row['vitamin_fruits'] == "Vitamin C") echo "<option value='Vitamin C' selected>Vitamin C</option>";
                                else echo "<option value='Vitamin C'>Vitamin C</option>";

                                if ($row['vitamin_fruits'] == "Vitamin D") echo "<option value='Vitamin D' selected>Vitamin D</option>";
                                else echo "<option value='Vitamin D'>Vitamin D</option>";

                                if ($row['vitamin_fruits'] == "Vitamin E") echo "<option value='Vitamin E' selected>Vitamin E</option>";
                                else echo "<option value='Vitamin E'>Vitamin E</option>";

                                if ($row['vitamin_fruits'] == "Vitamin K") echo "<option value='Vitamin K' selected>Vitamin K</option>";
                                else echo "<option value='Vitamin K'>Vitamin K</option>";
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group col-md-2">
                            <label for="Protein">Update Protein Fruits</label>
                            <input type="text" class="form-control" name="Protein" id="Protein" placeholder="Enter Protein Fruits" value="<?php echo $Protein; ?>" required>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form-group col-md-2">
                            <label for="Sodium">Update Sodium Fruits</label>
                            <input type="text" class="form-control" name="Sodium" id="Sodium" placeholder="Enter Sodium Fruits" value="<?php echo $Sodium; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-warning" name="Save" id="Save">Slice The Fruits</button>
                </div>
            </fieldset>
        </form>
<?php
        }
    } else {
        header('Location: index.php?page=fruits-list');
    }
}
?>