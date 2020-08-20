<?php
error_reporting(0);
include_once "../model/getArticlesModel.php";


class ShowArticlesController {
  
  public function __construct() {
    $datasArticles = new GetArticlesModel();
    $this->dtArt = $datasArticles->getAllArticles();
  }  


  public function showArticles() {    
    foreach($this->dtArt as $key => $value) {      
      if($_GET['id'] == $value['id']) {        
        echo("<span><b>$value[title]</b></span>");
        echo("<span>$value[content]</span>");        
      }
    }

  }


  public function showNumbersArticles() {
    foreach($this->dtArt as $key => $value) {            
      echo("<a href=". "?id=$value[id]" . ">$value[id]</a>");
    }
  }




}