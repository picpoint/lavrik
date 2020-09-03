<?
session_start();
error_reporting(0);
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
    require_once "../model/getParametres.php";
    require_once "../controller/createLog.php";

    $pt = new CreateLog();
    $pt -> createLogs();
    
    $id = $_COOKIE['GET'];    
    $removeArticles = new GetArticleID($id);
    $removeArticles -> getOneArticle();  
  ?>



</body>
</html>