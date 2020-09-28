<?php



class GetAllPostsM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function getAllPost(string $sqlQuery) : array {
    $sth = $this->cnnct -> prepare($sqlQuery);
    $data = $sth -> execute();
    $data -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }


}