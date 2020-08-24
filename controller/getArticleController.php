<?php

require_once "../model/removeArticleModel.php";



class GetArticleID {  

  public function __construct($id) {
    $this->id = $id;
  }
  
  
  public function getOneArticle() {    
    $deleteArticles = new RemoveArticle($this->id);
    $deleteArticles -> removeArticle();
    header('location: ../dist/index.php');
  }


}


