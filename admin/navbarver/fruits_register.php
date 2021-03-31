<?php
include "inc/server.php";

if (isset($_POST['Save'])) {
  $fruit_name = $_POST['fruit_name'];
  $fruit_calories = $_POST['fruit_calories'];
  $vitamin_fruits = $_POST['vitamin_fruits'];
  $Protein = $_POST['Protein'];
  $Total_Fat = $_POST['Total_Fat'];
  $Cholesterol = $_POST['Cholesterol'];
  $Sodium = $_POST['Sodium'];
  $Potassium = $_POST['Potassium'];

  $sql = "INSERT INTO `apeshit3`(`fruit_name`,`fruit_calories`,`vitamin_fruits`,`Protein`,`Total_Fat`,`Cholesterol`,`Sodium`,`Potassium`)
    VALUES ('$fruit_name','$fruit_calories','$vitamin_fruits','$Protein','$Total_Fat','$Cholesterol','$Sodium','$Potassium')";


  $result = $conn->query($sql);

  if($result == TRUE) {
    echo "<script>
    Swal.fire({Good job!',
      'You clicked the button!',
      'success'
    }).then((result) => {if (result.value) {window.location = 'index.php?page=fruits-list'
    ;}})</script>";
  }else{
    echo "<script>
    Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
      {window.location = 'index.php?page=fruits-list;
      }
    })</script>". $sql . "<br>". $conn->error;
  }
  $conn->close();
}
?>
<div class="container">
  <form action="" method="POST">
    <div class="form-row">
      <div class="mt-3">
        <div class="form-group col-md-6">
          <label for="fruit_name">Fruit Name</label>
          <input type="text" class="form-control" name="fruit_name" id="fruit_name" placeholder="Enter Fruit Name">
        </div>
      </div>
      <div class="mt-3">
        <div class="form-group col-md-6">
          <label for="fruit_calories">Fruit Calories</label>
          <input type="text" class="form-control" name="fruit_calories" id="fruit_calories" placeholder="Enter Fruit Calories" required>
        </div>
      </div>
    </div>
    <div class="mt-3">
      <div class="form-group col-md-2">
        <label for="Total_Fat">Total Fat Fruits</label>
        <input type="text" class="form-control" name="Total_Fat" id="Total_Fat" placeholder="Enter Total Fat Fruits" required>
      </div>
    </div>
    <div class="mt-3">
      <div class="form-group col-md-2">
        <label for="Cholesterol">Cholesterol Fruits</label>
        <input type="text" class="form-control" name="Cholesterol" id="Cholesterol" placeholder="Enter Cholesterol Fruits" required>
      </div>
    </div>
    <div class="form-row">
      <div class="mt-3">
        <div class="form-group col-md-6">
          <label for="Potassium">Potassium Fruits</label>
          <input type="text" class="form-control" name="Potassium" id="Potassium" placeholder="Enter Potassium" required>
        </div>
      </div>
      <div class="mt-3">
        <div class="form-group col-md-4">
          <label for="vitamin_fruits">Vitamin Fruits</label>
          <select name="vitamin_fruits" id="vitamin_fruits" class="form-control">
            <option selected>Choose...</option>
            <option>Vitamin A</option>
            <option>Vitamin B</option>
            <option>Vitamin C</option>
            <option>Vitamin D</option>
            <option>Vitamin E</option>
            <option>Vitamin K</option>

          </select>
        </div>
      </div>
      <div class="mt-3">
        <div class="form-group col-md-2">
          <label for="Protein">Protein Fruits</label>
          <input type="text" class="form-control" name="Protein" id="Protein" placeholder="Enter Protein Fruits" required>
        </div>
      </div>

      <div class="mt-3">
        <div class="form-group col-md-2">
          <label for="Sodium">Sodium Fruits</label>
          <input type="text" class="form-control" name="Sodium" id="Sodium" placeholder="Enter Sodium Fruits" required>
        </div>
      </div>
    </div>

    <div class="mt-3">
      <button type="submit" class="btn btn-warning" name="Save" id="Save">Slice The Fruits</button>
    </div>
  </form>
</div>

