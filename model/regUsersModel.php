<?php



class RegistrationUsersM {                                                          // модель регистрация пользователей
  public $role = '1';                                                               // устанавливаем роль по умолчанию == 1, это простой пользователь

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');    // в конструкторе устанавливаем соединение к бд
  }


  public function regUser(string $login, string $pass) {                            // метод регистрации пользователя 

    if($login == 'admin') {                                                         // если админ
      $this->role = '0';                                                            // присваиваем ему роль == 0
    }

    $sth = $this->cnnct -> prepare("INSERT INTO users (login, password, role) VALUES('$login', '$pass', '$this->role')"); // регаем юзера, делаем запись о нём
    $sth -> execute();                                                              // выполняем запрос
  }


}