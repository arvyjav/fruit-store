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
  <h1>Наш взгляд / Our Vision</h1>
     <?php 
       $jsonData = file_get_contents("JsonData/vision.json");
       $json = json_decode($jsonData,true);


       $output = "";
       foreach($json["vision"] as $vision)
       {
           $output.="".$vision['id']."<br />";
           $output.="".$vision['judul']."<br />";
           $output.="<br/>";
       }
       echo $output;


     ?>
</div> 