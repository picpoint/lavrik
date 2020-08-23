<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add post</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
  require_once "../controller/addArticleController.php";
  require_once "../model/writeArticleDBModel.php";  
?>

<section class="add">
  <div class="add__postblock">
    
    <form method="post" class="add__formpost">
      <?php        
        $res = new AddArticle();
        $res -> getDatas();  
      ?>
      
      <input type="text" name="title" placeholder="Заголовок статьи">
      <textarea name="content" id="cont" placeholder="Содержимое статьи"></textarea>      
      <button type="submit" name="btnsend">Добавить пост</button>      
    </form>      

  </div>    
</section>


</body>
</html>