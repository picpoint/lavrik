<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

    require_once "../controller/getArticleController.php";
    require_once "../controller/showArticlesController.php";
    // print_r($_GET["id"]);
    // die();
    
    $removeArticles = new GetArticleID();
    $removeArticles -> getOneArticle();
  
  ?>



</body>
</html>