<?php



class GetAllPostsM {                                                              // модель получения всех постав из БД

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');  // в конструкторе устанавливаем соединение с БД
  }


  public function getAllPost(string $sqlQuery) : array {                          // получить все посты из БД
    $sth = $this->cnnct -> prepare($sqlQuery);                                    // делаем запрос к БД
    $sth -> execute();                                                            // выполняем запрос
    return $sth -> fetchAll(PDO::FETCH_ASSOC);                                    // возвращаем массив данных
  }


}