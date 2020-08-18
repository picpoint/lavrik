<?php



class GetArticlesModel {
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');
  }


  public function getAllArticles() {
    $sth = $this->cnnct -> prepare('SELECT * from articles');
    $sth -> execute();
    $datas = $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $datas;

  }


}