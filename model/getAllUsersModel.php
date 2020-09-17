<?php



class GetAllUsersM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
    // $this->arrFields = $arrFields;
  }
  
  public function getAllUsersLogin() {
    $sth = $this->cnnct -> prepare("SELECT login FROM users");
    $sth -> execute();
    $logins = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $logins;
  }  


}