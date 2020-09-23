<?php



class RegistrationUsersM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function regUser(string $login, string $pass) {
    $sth = $this->cnnct -> prepare("INSERT INTO users (login, password) VALUES('$login', '$pass')");
    $sth -> execute();
  }


}