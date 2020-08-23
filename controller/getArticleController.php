<?php

require_once "../model/removeArticleModel.php";



class GetArticleID {  
  
  public function getOneArticle() {
    $id = $_GET['id'];
    echo($id);
    
    $deleteArticles = new RemoveArticle($id);
    $deleteArticles -> removeArticle();

    header('location: ../dist/index.php');
  }


}


