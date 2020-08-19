<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section class="wrp">
    <?php
      require_once "../controller/showArticlesController.php";
      $res = new ShowArticlesController();
      $res->showArticles();
    ?>
  </section>

  
    

</body> 
</html>