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
<?php
  require_once "../controller/showArticlesController.php";
?>

  <section class="wrp">
    <div class="wrp__contentblock">
      <?php      
        $res = new ShowArticlesController();
        $res->showArticles();
      ?>
    </div>
    <div class="wrp__links">
      <?php
        $res = new ShowArticlesController();
        $res->showNumbersArticles();
      ?>
    </div>
    
  </section>

  
    

</body> 
</html>