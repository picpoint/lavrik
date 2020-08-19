<?php

include_once "../model/getArticlesModel.php";


class ShowArticlesController {
  
  public function __construct() {
    $datasArticles = new GetArticlesModel();
    $this->dtArt = $datasArticles->getAllArticles();
  }  


  function showArticles() {
    // return $this->dtArt;
    foreach($this->dtArt as $key => $value) {
      // echo("$key - $value");
      // print_r($value);
      // echo("<br>");
      // echo("<br>");
      // echo("<br>");
      echo("<div class="."wrp__link".">");
        echo("<a href=". "#" . ">$value[id]</a>");
      echo("</div>");
    }
  }


}