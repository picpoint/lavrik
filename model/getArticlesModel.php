<?php



class GetArticles {                                                                     // класс модель, получения статей из бд
  
  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=lavrik', 'rmtar', '2203');      // подключаемся к бд
  }


  public function getArticles() {                                                       // метод получения статей
    $sth = $this->cnnct -> prepare('SELECT * from articles');                           // выбрать всё из таблицы статьи
    $sth -> execute();                                                                  // выполнить запрос
    $datas = $sth -> fetchAll(PDO::FETCH_ASSOC);                                        // получить данные в виде ассоциативного массива

    return $datas;                                                                      // вернуть данные
  }

}