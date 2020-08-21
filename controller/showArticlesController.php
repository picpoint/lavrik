<?php

require_once "../model/getArticlesModel.php";


class ShowArticles {

  public function __construct() {
    $articles = new GetArticles();
    $this->arr = $articles -> getArticles();
  }
    

  public function showArticles() {    
    foreach($this->arr as $arr) {      
      foreach($arr as $key => $value) {
        if($_GET['id'] == $value) {
          echo("<div class="."wrp__title".">");
            echo($arr['title']);
          echo("</div>");
          echo("<div class="."wrp__content".">");
            echo($arr['content']);
          echo("</div>");
          echo("<div class="."wrp__remove".">");
            echo("<a href="."?id=$value".">remove</a>");
          echo("</div>");
        }

      }
    }

  }


  public function showPagination() {
    foreach($this->arr as $mass) {
      foreach($mass as $key => $value) {        
        if($key == 'id') {
          echo("<a href="."?id=$value".">$value</a>");
        }
      }
    }

  }



}