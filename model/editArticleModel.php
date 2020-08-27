<?php

require_once "../controller/editArticleController.php";


class EditArticle {
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');
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
    // $datas = new GetCoockieID();
    // $datasToWrite = $datas -> editArticle();
    // print_r($datasToWrite);
    
    $sth = $this->cnnct -> prepare(" UPDATE articles SET title='$datasToWrite[1]', content='$datasToWrite[2]' WHERE id='$datasToWrite[0]' ");
    $sth -> execute();
  }
  


}