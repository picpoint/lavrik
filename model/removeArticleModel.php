<?php

require_once "../controller/editArticleController.php";


class RemoveArticle {

  public function __construct($id) {
    $this->cnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');
    $this->id = $id;
  }


  public function removeArticle() {
    $sth = $this->cnct -> prepare("DELETE FROM articles WHERE id = '$this->id' ");
    $sth -> execute();    
  }


}