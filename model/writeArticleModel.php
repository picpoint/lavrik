<?php



class WriteArticleM {                                                             // модель записи статьи в БД
  public $moderation = '0';                                                       // по умолчанию ставим занчение 0, значит что пост не прошёл модерацию

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');  // подключаемся к БД
  }


  public function writeArticleToDB(array $mass) {                                 // метод записи статьи в БД
    $title = $mass[0];                                                            // для записи данных в БД, из массива каждой переменной присваиваем нужное значение
    $content = $mass[1];
    $author = $mass[2];
    $date = $mass[3];
    
    $sth = $this->cnnct -> prepare("INSERT INTO articles (headpost, bodypost, author, date, moderation) VALUES('$title', '$content', '$author', '$date', '$this->moderation')"); // подготавливаем запрос
    $sth -> execute();                                                             // выполняем запрос
  }



}