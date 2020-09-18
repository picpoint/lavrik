<?php



class AuthorizationM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function checkAuthorizUser() {
    
  }


}