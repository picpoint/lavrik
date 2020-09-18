<?php



class RegistrationM {
  
  public function __construct($arrFields) {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
    $this->arrFields = $arrFields;
  }

   
  public function writeUsersToDB() {
    $login = trim($this->arrFields[0]);
    $password = trim($this->arrFields[1]);
    $sth = $this->cnnct -> prepare("INSERT INTO users (login, password) VALUE('$login', '$password')");
    $sth -> execute();
  }


}