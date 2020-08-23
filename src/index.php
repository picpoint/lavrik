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
  require_once "../controller/getArticleController.php";
?>


  <section class="wrp">
    <?php
      // $removeArticle = new GetArticleID();
      // $removeArticle -> getOneArticle();
    ?>
    <div class="wrp__article">
      <?php
        $showArticles = new ShowArticles();
        $showArticles -> showArticles();
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