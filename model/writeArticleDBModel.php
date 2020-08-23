<?php

require_once "../controller/addArticleController.php";


class WriteArticle {                                                                                      // клас модель добавления статьи в бд
  
  public function __construct($res) {                                                                     // конструктор принимает массив с данными из контроллера
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');                        // подключаемся к бд
    $this->res = $res;
  }  


  public function writeArticleDB() {                                                                      // метод записи данных в бд
    $title = $this->res[0];                                                                               // из массива получаем заголовок статьи
    $content = $this->res[1];                                                                             // из массива получаем содержимое статьи
    $sth = $this->cnnct -> prepare("INSERT INTO articles (title, content) VALUES('$title', '$content')"); // подготавливаем запрос
    $sth -> execute();                                                                                    // выполняем запись в бд
  }



}