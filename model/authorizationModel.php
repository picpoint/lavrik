<?php



class GetAllUsersM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function getAllUsrs() {
    $sth = $this->cnnct -> prepare("SELECT login, password FROM users");
    $sth -> execute();
    return $sth -> fetchAll(PDO::FETCH_ASSOC);    
  }



}