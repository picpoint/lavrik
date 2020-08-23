<?php

require_once "../model/writeArticleDBModel.php";


class AddArticle {                                                        // класс контроллер добавление статьи
  public $arr = [];                                                       // пустой массив для заполнения в него данных и передачи модели

  public function getDatas() {                                            // метод, получение данных из полей
    if(isset($_POST['btnsend'])) {                                        // если кнопка "Добавить пост" нажата
      if(!empty($_POST['title']) && !empty($_POST['content'])) {          // если поля title и content не пустые 
        $this->arr[] = $_POST['title'];                                   // в массив добавить данные из поля title
        $this->arr[] = $_POST['content'];                                 // в массив добавить данные из поля content

        $res = new WriteArticle($this->arr);                              // вызываем модель добавления данных в бд
        $res -> writeArticleDB();                                         // после того как модель отработает
        header('location: index.php');                                    // перебрасываем обратно на главную
      } else {
        echo('Поля не заполнены');                                        // иначе если одно из полей не заполнено, оповещаем об этом
      }
    } 

  }

  


}