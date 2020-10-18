<?php



class ShowListPostsC {                                                                  // контроллер показа постов
  
  public function showList() {                                                          // метод показа
    if($_SESSION['login'] == 'admin') {                                                 // если это админ
      $result = new GetAllPostsM();                                                     // вызываем метод который возвращает все посты
      $res = $result -> getAllPost("SELECT id_articles, headpost, bodypost FROM articles WHERE moderation = 0"); // передаём запрос в модель
      
      foreach($res as $rs) {                                                            // пребираем результат
        foreach($rs as $key => $value) {
          if($key == 'id_articles') {                                                            // если ключ это поле id 
            $_GET['id'] = $value;                                                       // в GET присваиваем id
          }
          if($key == 'headpost') {                                                      // если ключ это заголовок поста
            echo("<a href=" . "../view/moderPost.php?id=$_GET[id]" . ">$value</a>");    // выводим ссылками заголовки поста и в самой ссылке есть адрес перехода ?id=$_GET[id]
          }
        }
      }
            

    } else if ($_SESSION['login'] != 'admin') {                                         // иначе если это не админ

      $result = new GetAllPostsM();                                                     // вызываем метод который возвращает все посты
      $res = $result -> getAllPost("SELECT id_articles, headpost, bodypost FROM articles WHERE moderation = 1"); // передаём запрос в модель, которая возвращает только отмодерированные посты
      
      foreach($res as $rs) {                                                            // пребираем результат
        foreach($rs as $key => $value) {
          if($key == 'id_articles') {                                                            // если ключ это поле id 
            $_GET['id'] = $value;                                                       // в GET присваиваем id
          }
          if($key == 'headpost') {                                                      // если ключ это заголовок поста
            echo("<a href=" . "../view/moderPost.php?id=$_GET[id]" . ">$value</a>");    // выводим ссылками заголовки поста и в самой ссылке есть адрес перехода ?id=$_GET[id]
          }
        }
      }

    }



    
  }


}