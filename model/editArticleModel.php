<?php

require_once "../controller/editArticleController.php";


class EditArticle {
  //public $massToEdit;
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');
    //$this->massToEdit = $massToEdit;
  }


  public function getArticleFromDB() {
    $res = new GetCoockieID();
    $coockId = $res -> getCookie();   

    $sth = $this->cnnct -> prepare("SELECT title, content FROM articles WHERE id = '$coockId'");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public function writeEditArticle() {        
    $res = new GetCoockieID();
    $massToEdit = $res -> editArticle();
    $sth = $this->cnnct -> prepare("UPDATE articles SET title='$massToEdit[1]', content='$massToEdit[2]' WHERE id='$massToEdit[0]'");
    $sth -> execute();
    // header('location: index.php');
  }
  


}