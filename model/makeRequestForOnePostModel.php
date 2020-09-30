<?php



class EditOnePostM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function makeRequestForOnePost(string $request) {
    $sth = $this->cnnct -> prepare($request);
    $sth -> execute();
  }



}