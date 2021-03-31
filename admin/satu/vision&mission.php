<?php
include "inc/server.php";


$sql = "SELECT * FROM `apeshit5`";


$result = $conn->query($sql);
?>

<nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Назад О</a>
    </li>
    <li class="page-item"><a class="page-link" href="?page=vision">Зрение</a></li>
    <li class="page-item"><a class="page-link" href="?page=mission">Миссия</a></li>
  </ul>
</nav>
<div class="card">
  <h5 class="card-header">Data</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">About Developer</a>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buah About</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_SESSION['ses_nama'] ?>" disabled>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Level</label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Hehe" value="<?php echo $_SESSION['ses_level'] ?>" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="mt-2">
  <h3>Подтверждать</h3>
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Место рождения</th>
        <th scope="col">Положение дел</th>
        <th scope="col">Действие</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['long_name']; ?></td>
            <td><?php echo $row['birth_place']; ?></td>
            <td><?php echo $row['penerimaan']; ?></td>
            <td>
              <a href="?page=pros&id=<?php echo $row['id']; ?>" class="btn btn-success">Редактировать</a>
            </td>

          </tr>
      <?php }
      }
      ?>

    </tbody>
  </table>
</div>