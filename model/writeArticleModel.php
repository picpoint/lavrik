<?php



class WriteArticleM {
  public $moderation = '0';

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function writeArticleToDB(array $mass) {
    $title = $mass[0];
    $content = $mass[1];
    $author = $mass[2];
    $date = $mass[3];
    
    $sth = $this->cnnct -> prepare("INSERT INTO articles (headpost, bodypost, author, date, moderation) VALUES('$title', '$content', '$author', '$date', '$this->moderation')");
    $sth -> execute();
  }



}