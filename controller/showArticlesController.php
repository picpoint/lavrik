<?php

include_once "../model/getArticlesModel.php";


class ShowArticlesController {
  
  public function __construct() {
    $datasArticles = new GetArticlesModel();
    $this->dtArt = $datasArticles->getAllArticles();
  }  


  function showArticles() {    
    foreach($this->dtArt as $key => $value) {      
      if($_GET['id'] == $value['id']) {
        echo("<div class="."wrp__contentblock".">");
          echo("<span><b>$value[title]</b></span>");
          echo("<span>$value[content]</span>");
        echo("</div>");
      }

      echo("<a href=". "?id=$value[id]" . ">$value[id]</a>");
      
      
      
    }
  }


}