<?php

require_once "../model/removeArticleModel.php";



class GetArticleID {                                        // класс получения ID статьи

  public function __construct($id) {                        // передаётся текущий ID
    $this->id = $id;
  }
  
  
  public function getOneArticle() {                         // метод получения и удаления текущей статьи
    $deleteArticles = new RemoveArticle($this->id);         // вызываем класс удаления статьи
    $deleteArticles -> removeArticle();                     // вызываем метод удаления, удаляем нужную статью
    header('location: ../dist/index.php');                  // переадресовываем на главную
  }


}


