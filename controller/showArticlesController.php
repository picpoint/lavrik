<?php

include_once "../model/getArticlesModel.php";


class ShowArticlesController {
  
  public function __construct() {
    $datasArticles = new GetArticlesModel();
    $this->dtArt = $datasArticles->getAllArticles();
  }  


  function showArticles() {
    return $this->dtArt;
  }


}