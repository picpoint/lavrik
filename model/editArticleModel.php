<?php

require_once "../controller/editArticleController.php";


class EditArticle {                                               // класс модель редактирования статьи
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203'); // соединени с БД    
  }


  public function getArticleFromDB() {                            // метод получения статей из БД
    $res = new GetCoockieID();                                    // вызываем класс
    $coockId = $res -> getCookie();                               // полулаем из класса конкретную куку

    $sth = $this->cnnct -> prepare("SELECT title, content FROM articles WHERE id = '$coockId'");  // делаем запрос к БД к конкретной статье
    $sth -> execute();                                            // выполняем запрос
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);                    // получаем массив статей
    return $res;                                                  // возвращаем результат
  }

  public function writeEditArticle() {                            // метод записи изменённой статьи в БД
    $res = new GetCoockieID();                                    // вызываем класс
    $massToEdit = $res -> editArticle();                          // вызываем метод редактирования, который вернёт текущее содержимое полей
    $sth = $this->cnnct -> prepare("UPDATE articles SET title='$massToEdit[1]', content='$massToEdit[2]' WHERE id='$massToEdit[0]'"); // делаем обновление статьи
    $sth -> execute();                                            // выполняем запрос
  }
  


}