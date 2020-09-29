<?php



class GetAllPostsM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');
  }


  public function getAllPost(string $sqlQuery) : array {
    $sth = $this->cnnct -> prepare($sqlQuery);
    $sth -> execute();
    return $sth -> fetchAll(PDO::FETCH_ASSOC);    
  }


}