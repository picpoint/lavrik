<?php

require_once "../model/getArticlesModel.php";


class ShowArticles {
    
  public function showArticles() {
    $articles = new GetArticles();
    $arr = $articles -> getArticles();

    foreach($arr as $mass) {
      foreach($mass as $key => $value) {
        echo("$key - $value");
        echo("<br>");
        echo("<br>");
      }
    }
  }

}