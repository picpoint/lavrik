<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="lk">
  <div class="lk__wrp">
    <div class="lk__headline">
      <div class="lk__username">
        <span>
          <?php
            echo($_SESSION['login']);
          ?>
        </span>
      </div>
      <div class="lk__menu">
        <a href="#">Some link 1</a>
        <a href="#">Some link 1</a>
        <a href="#">Some link 1</a>
      </div>
      <div class="lk__outblock">
        <a href="index.php">Выход</a>
      </div>
    </div>
    <div class="lk__mainblock">
      <div class="lk__blockform">
        
      </div>
    </div>
  </div>
</section>


</body>
</html>