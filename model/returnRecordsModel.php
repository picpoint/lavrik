<?php



class ReturnRecordsM {

  public function __construct() {
    $this->cnnct = new PDO('mysql:host=localhost;dbname=blog', 'rmtar', '2203');      
  }


  public function returnRec(string $request):array {
    $sth = $this->cnnct -> prepare($request);
    $data = $sth -> execute();
    $data -> fetchAll(PDO::FETCH_ASSOC);
    return $data;
  } 



}