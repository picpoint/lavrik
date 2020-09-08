<?php

require_once "../controller/editArticleController.php";


class RemoveArticle {                                       // класс удаления статьи

  public function __construct($id) {                        // передаём нужный ID
    $this->cnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203'); //делаем соединение с БД
    $this->id = $id;
  }


  public function removeArticle() {                         // метод удаления статьи
    $sth = $this->cnct -> prepare("DELETE FROM articles WHERE id = '$this->id' ");  // запрос на удаления статьи, по нужному ID
    $sth -> execute();                                      // выполняем запрос
  }


}