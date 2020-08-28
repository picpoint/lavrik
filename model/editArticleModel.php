<?php

require_once "../controller/editArticleController.php";


class EditArticle {
  // public $massToEdit;
  
  public function __construct($massToEdit) {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');
    $this->massToEdit = $massToEdit;
  }


  public function getArticleFromDB() {
    $res = new GetCoockieID();
    $coockId = $res -> getCookie();   

    $sth = $this->cnnct -> prepare("SELECT title, content FROM articles WHERE id = '$coockId' ");
    $sth -> execute();
    $res = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }

  public function writeEditArticle() {    
    echo('*****************Method is ok********************');
    // $sth = $this->cnnct -> prepare(" UPDATE articles SET title='$this->massToEdit[1]', content='$this->massToEdit[2]' WHERE id='$this->massToEdit[0]' ");
    // $sth -> execute();
    // return $this->massToEdit;
  }
  


}