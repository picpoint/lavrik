<?php



class ShowOnePostByIdC {                                                                // контроллер показать один пост по определённому id

  public function showOnePost() {                                                       // метод показа
    $idPost = $_GET['id'];                                                              // $idPost присваиваем id из ГЕТ-запроса

    $res = new GetAllPostsM();                                                          // вызываем модель которая выводит посты
    $onePosts = $res -> getAllPost("SELECT headpost, bodypost, date FROM articles WHERE $idPost = id"); // делаем запрос полей по нужному id
      
    foreach($onePosts as $pst) {                                                        // перебираем полученный результат
      foreach($pst as $key => $value) {
        if($key == 'headpost') {                                                        // если ключ == headpost
          echo("<div class=" . " mp__hdrpost" . ">");
            echo("<span>$value</span>");                                                // выводим заголовок поста в блоке hdrpost
          echo("</div>");
        } else if($key == 'bodypost') {                                                 // если ключ == bodypost
          echo("<div class=" . " mp__bdpost" . ">");
            echo("<span>$value</span>");                                                // выводим тело поста в блоке bodypost
          echo("</div>");
        } else if($key == 'date') {                                                     // если ключ == date
          echo("<div class=" . " mp__dtpost" . ">");
            echo("<span>$value</span>");                                                // выводим дату поста в блоке dtpost
          echo("</div>");
        }
          
      }
    }

  }



}