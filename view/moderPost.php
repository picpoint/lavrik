<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админская страница модерации постов</title>
  <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
<?php
  require_once "../controller/showOnePostByIDController.php";
  require_once "../model/getAllPostsForAdminModel.php";
?>


  <section class="mp">
    <div class="mp__wrp">
      <div class="mp__posts">
        <?php
          $showPost = new ShowOnePostByIdC();
          $showPost -> showOnePost();
        ?>
      </div>
      <div class="mp__operations">
      
      </div>
    </div>
  </section>
 
  


</body>
</html>