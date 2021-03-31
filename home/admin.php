<?php

include "inc/server.php";

$sql = "SELECT * FROM `apeshit3`";

?>

<?php

$brok = $conn->query("SELECT count(numbr) as numbr from apeshit3");
	while ($data= $brok->fetch_assoc()) {
	
		$numbr=$data['numbr'];
	}
?>


<div class="container">
  <div class="row text-center equal-height-columns">
    <div class="col-md-3 col-lg-3 col-mt-3">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Fruit How Much</div>
        <div class="card-body">
          <h5 class="card-title">How Much: <?php echo $numbr; ?> Fruits</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

