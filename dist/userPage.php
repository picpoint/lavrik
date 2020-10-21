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
<?php
  require_once "../controller/writeArticleController.php";
  require_once "../model/writeArticleModel.php";
  require_once "../controller/showListsPosts.php";
  require_once "../model/getAllPostsForAdminModel.php";  
?>

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
        <form method="POST" class="lk__formpost">
          <input type="text" name="headpost" placeholder="Заголовок">
          <textarea name="bodypost" id="bodypost" placeholder="Статья"></textarea>          
          <button type="submit" name="writebtn">НАПИСАТЬ ПОСТ</button>
          <div class="lk__cattags">
            
            <div class="lk__category">
              <select name="categories" id="ctg">
                <option value="space">Космос</option>
                <option value="computers">Компьютеры</option>
                <option value="food">Еда</option>
                <option value="sport">Спорт</option>
                <option value="science">Наука</option>
              </select>
            </div>
            
            <div class="lk__tags">
              <label for="news" class="lk__lblnews">
                <input type="checkbox" name="tags[]" value="news">
                <span>#Новое</span>
              </label>

              <label for="bty" class="lk__lblbeauty">
                <input type="checkbox" name="tags[]" value="bty">
                <span>#Красота</span>
              </label>

              <label for="disc" class="lk__lbldisc">
                <input type="checkbox" name="tags[]" value="disc">
                <span>#Скидки</span>
              </label>
              
              <label for="buy" class="lk__lblbuy">
                <input type="checkbox" name="tags[]" value="buy">
                <span>#Покупки</span>
              </label>
              
              <label for="othr" class="lk__lblothr">
                <input type="checkbox" name="tags[]" value="othr">
                <span>#Другое</span>
              </label>

            </div>
          </div>
          <?php
            $resWriteArticle = new WriteArticleC();
            $resWriteArticle -> getDatasFields();
          ?>
        </form>
      </div>
      <div class="lk__moderblock">
        <?php
          $showPosts = new ShowListPostsC();
          $showPosts -> showList();
        ?>
      </div>
    </div>
  </div>
</section>


</body>
</html>