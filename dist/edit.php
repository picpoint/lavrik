<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit post</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  require_once "../controller/editArticleController.php";
  require_once "../model/editArticleModel.php";

?>

<section class="edit">
  <div class="edit__postblock">
    
    <form method="post" class="edit__formpost">      
      <h3>Редактировать</h3>
      <?php
        $coockie = new GetCoockieID();
        echo($coockie -> getCookie());
      ?>
      <input type="text" name="titleedit" value="<?php $hdr = new GetCoockieID();$hdrRes = $hdr -> getHeaderArticle();echo($hdrRes); ?>">
      <textarea name="contentedit" id="cont"><?php $cntnt = new GetCoockieID(); $cntntRes = $cntnt -> getContentArticle(); echo($cntntRes); ?></textarea>      
      <button type="submit" name="btnedit">РЕДАКТИРОВАТЬ</button>      

      <?php
        $res = new GetCoockieID();
        $res -> insertArticlesToFields();        
        // $res = new EditArticle();
        // $res -> getArticleFromDB();
      ?>
    </form>      

  </div>    
</section>


</body>
</html>