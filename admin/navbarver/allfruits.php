<?php
include "inc/server.php";

$sql = "SELECT * FROM `apeshit3`";


$result = $conn->query($sql);
?>


<div class="card">
  <h5 class="card-header text-white bg-primary mb-3">Fruits</h5>
  <div class="card-body">
    <h5 class="card-title">All Fruits Data</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="?page=add-fruit" class="btn btn-warning">Gas This Fuel</a>
  </div>


  <div class="container">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <?php if ($data_level == "Admin") { ?>
            <th scope="col">#</th>
            <th scope="col">Fruit Name</th>
            <th scope="col">Fruit Cal</th>
            <th scope="col">Vitamin</th>
            <th scope="col">Protein</th>
            <th scope="col">Total fat</th>
            <th scope="col">Cholesterol</th>
            <th scope="col">Sodium</th>
            <th scope="col">Potassium</th>
            <th scope="col">Action</th>

          <?php } elseif ($data_level == "User") { ?>
            <th scope="col">#</th>
            <th scope="col">Fruit Name</th>
            <th scope="col">Fruit Cal</th>
            <th scope="col">Vitamin</th>
            <th scope="col">Protein</th>
            <th scope="col">Total fat</th>
            <th scope="col">Cholesterol</th>
            <th scope="col">Sodium</th>
            <th scope="col">Potassium</th>

          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <?php if ($data_level == "Admin") { ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['fruit_name'] ?></td>
                <td><?php echo $row['fruit_calories'] ?></td>
                <td><?php echo $row['vitamin_fruits'] ?></td>
                <td><?php echo $row['Protein'] ?></td>
                <td><?php echo $row['Total_Fat'] ?></td>
                <td><?php echo $row['Cholesterol'] ?></td>
                <td><?php echo $row['Sodium'] ?></td>
                <td><?php echo $row['Potassium'] ?></td>
                <td>
                  <a href="?page=update-fruit&numbr=<?php echo $row['numbr']; ?>" class="btn btn-success">Edit</a> &nbsp;
                  <a href="?page=del-fruit&numbr=<?php echo $row['numbr']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin hapus data ini ?')">Delete</a>
                </td>
              </tr>

            <?php } elseif ($data_level == "User") { ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['fruit_name'] ?></td>
                <td><?php echo $row['fruit_calories'] ?></td>
                <td><?php echo $row['vitamin_fruits'] ?></td>
                <td><?php echo $row['Protein'] ?></td>
                <td><?php echo $row['Total_Fat'] ?></td>
                <td><?php echo $row['Cholesterol'] ?></td>
                <td><?php echo $row['Sodium'] ?></td>
                <td><?php echo $row['Potassium'] ?></td>

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