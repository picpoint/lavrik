<?php

require_once "../model/editArticleModel.php";



class GetCoockieID {

  
  
  public function getCookie() {
    return $_COOKIE['GET'];
  }


  public function insertArticlesToFields() {
    $arr = new EditArticle();
    $mass = $arr -> getArticleFromDB();

    print_r($mass);


  }


}