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
    $category = $mass[4];
    $tags = $mass[5];
    $tgs = '';                                                                    // назначаем переменной пустую строку для того чтоб поместить туда значения тегов и всё сделать строкой

    foreach($tags as $key => $value) {                                            // перебираем массив тегов и всё сливаем в строку
      $tgs =  $tgs . ' ' . $value . ' ';
    }
    
    $sth = $this->cnnct -> prepare("INSERT INTO articles (headpost, bodypost, id_user, date, id_category, tags, moderation) VALUES('$title', '$content', '$author', '$date', '$category', '$tgs', '$this->moderation')"); // подготавливаем запрос
    $sth -> execute();                                                             // выполняем запрос
  }



}