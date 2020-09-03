<?php
error_reporting(0);

require_once "../model/getArticlesModel.php";


class ShowArticles {                                                              // класс контроллер вывода статей на страницу

  public function __construct() {                                                 // в конструкторе получаем данные из модели
    $articles = new GetArticles();
    $this->arr = $articles -> getArticles();
  }
    

  public function showArticles() {                                                // метод показа статей на странице
    foreach($this->arr as $arr) {                                                 // перебираем массив массивов
      foreach($arr as $key => $value) {                                           // перебираем массив 
        if($_GET["id"] == $value) {                                               // если $_GET['id'] соответствует значению из списка статей
          echo("<div class="."wrp__title".">");                                   // в блоках выводим заголовок и содержимое статьи
            echo($arr['title']);
          echo("</div>");
          echo("<div class="."wrp__content".">");
            echo($arr['content']);
          echo("</div>");
          echo("<div class="."wrp__operations".">");
            echo("<a href="."../dist/remove.php".">Remove</a>");
            echo("<a href="."add.php".">Add</a>");
            echo("<a href="."edit.php".">Edit</a>");
            echo("<a href="."logs.php".">Logs</a>");
          echo("</div>");
        }

      }
    }

  }


  public function showPagination() {                                               // метод вывода номеров статей
    foreach($this->arr as $mass) {                                                 // перебираем массив массивов
      foreach($mass as $key => $value) {                                           // перебираем получившийся массив
        if($key == 'id') {                                                         // если ключ == id 
          echo("<a href="."?id=$value".">$value</a>");                             // вывести ссылку с адресом статьи и номером как ссылки          
        }
      }
    }    

  }



}