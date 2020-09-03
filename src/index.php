<?php
session_start();
setcookie('GET', $_GET["id"] ?? '0', time() + 86400);
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
  require_once "../controller/getArticleController.php";
  require_once "../model/getParametres.php";
  require_once "../controller/createLog.php";
?>


  <section class="wrp">    
    <div class="wrp__article">
      <?php
        $showArticles = new ShowArticles();
        $showArticles -> showArticles();
        
        $pt = new CreateLog();
        $pt -> createLogs();
      ?>
    </div>
    <div class="wrp__paginator">
      <?php
        $paginator = new showArticles();
        $paginator -> showPagination();
      ?>      
    </div>

  </section>  
    

</body> 
</html>