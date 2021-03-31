<nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item">
      <a class="page-link" href="?page=visi-misi" tabindex="-1">Назад О</a>
    </li>
    <li class="page-item"><a class="page-link" href="?page=vision">Зрение</a></li>
    <li class="page-item"><a class="page-link" href="?page=mission">Миссия</a></li>
  </ul>
</nav>
<div class="container">
<h1>Наша миссия / Our Mission</h1>
<?php 
       $jsonData = file_get_contents("JsonData/mission.json");
       $json = json_decode($jsonData,true);


       $output = "";
       foreach($json["mission"] as $mission)
       {
           $output.="".$mission['id']."<br />";
           $output.="".$mission['judul']."<br />";
           $output.="<br/>";
       }
       echo $output;


     ?>
</div>