<?php



class ReturnRecordsM {                                                            // модель возвращающая данные из бд

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');  // подключаемся к БД
  }


  public function returnRec(string $request):array {                              // метод возвращающий результат на запрос
    $sth = $this->cnnct -> prepare($request);                                     // позготавливаем запрос
    $sth -> execute();                                                            // выполняем
    $data =  $sth -> fetchAll(PDO::FETCH_ASSOC);                                  // получаем массив данных
    return $data;                                                                 // возвращаем результат
  } 



}