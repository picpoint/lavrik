<?php

require_once "../model/editArticleModel.php";



class GetCoockieID {                                                  // класс получения кук, и редактирования статей
  public $mass;
  public $res;
  public $coockie;
  public $massToEdit = [];
  
  public function getCookie() {                                       // метод получения кук
    return $_COOKIE['GET'];
  }


  public function insertArticlesToFields() {                          // метод получения конкретной статьи из бд
    $arr = new EditArticle();                                         // вызываем класс 
    $this->mass = $arr -> getArticleFromDB();                         // получаем статью из бд
    return $this->mass;                                               // возвращаем данную статью
  }


  public function getHeaderArticle() {                                // метод получения заголовка статьи
    $this->res = $this->insertArticlesToFields();                     // вызываем метод insertArticlesToFields
    return $this->res[0]['title'];                                    // получаем из массива элемент по ключу title
  }

  
  public function getContentArticle() {                               // метод получения тела статьи
    $this->res = $this->insertArticlesToFields();                     // вызываем метод insertArticlesToFields
    return $this->res[0]['content'];                                  // получаем из массива элемент по ключу content
  }


  public function editArticle() {                                     // метод редактирования статьи
    $this->coockie = $this->getCookie();                              // получаем куку

    if(isset($_POST['btnedit'])) {                                    // если кнопка нажата
      if(!empty($_POST['titleedit']) && !empty($_POST['contentedit'])) {  // если поля не пустые
        $massToEdit[] = $this->coockie;                               // в массив записываем куку
        $massToEdit[] = $_POST['titleedit'];                          // записываем инфу из поля заголовок
        $massToEdit[] = $_POST['contentedit'];                        // записываем инфу из поля контент
        return $massToEdit;                                           // возвращаем готовый массив
      }
    }

  } 






}