<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Day log</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  require_once "../controller/showOneLogController.php";
?>
  
  <section class="daylog">
    
    <div class="daylog__hdr">
      <h3>Лог
        <?php 
          $result = new showOneLog();    
          echo($result -> readCoockie());
        ?>
      </h3>
    </div>
    
    <div class="daylog__logs">
      <?php
        $result = new showOneLog();    
        $result -> readThisLog();
      ?>
    </div>  
  </section>
  
  
</body>
</html>