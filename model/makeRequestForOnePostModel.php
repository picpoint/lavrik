<?php



class EditOnePostM {                                                              // метод редактирования одного поста

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');  // подсоединяемся к БД
  }


  public function makeRequestForOnePost(string $request) {                        // метод - сделать запрос для одного поста
    $sth = $this->cnnct -> prepare($request);                                     // делаем запрос к БД
    $sth -> execute();                                                            // выполняем запрос
  }



}