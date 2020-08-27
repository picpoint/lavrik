<?php

require_once "../model/editArticleModel.php";



class GetCoockieID {  
  public $mass;
  public $res;
  
  public function getCookie() {
    return $_COOKIE['GET'];
  }


  public function insertArticlesToFields() {
    $arr = new EditArticle();
    $this->mass = $arr -> getArticleFromDB();
    return $this->mass;
  }


  public function getHeaderArticle() {
    $this->res = $this->insertArticlesToFields();
    return $this->res[0]['title'];
  }

  
  public function getContentArticle() {
    $this->res = $this->insertArticlesToFields();
    return $this->res[0]['content'];
  }

  






}