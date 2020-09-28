<?php



class RegistrationUsersM {
  public $role = '1';

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function regUser(string $login, string $pass) {

    if($login == 'admin') {
      $this->role = '0';
    }

    $sth = $this->cnnct -> prepare("INSERT INTO users (login, password, role) VALUES('$login', '$pass', '$this->role')");
    $sth -> execute();
  }


}