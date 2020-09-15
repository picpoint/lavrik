<?php



class RegistrationM {
  
  public function __construct($arrFields) {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
    $this->arrFields = $arrFields;
  }

  public function getAllUsersLogin() {
    $sth = $this->cnnct -> prepare("SELECT login FROM users");
    $res = $sth -> execute();
    return $res;
  }

  public function writeUsersToDB() {
    $login = $this->arrFields[0];
    $password = $this->arrFields[1];
    $sth = $this->cnnct -> prepare("INSERT INTO users (login, password) VALUE('$login', '$password')");
    $sth -> execute();
  }





}