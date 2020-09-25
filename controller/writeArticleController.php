<?php



class WriteArticleC {

  public function __construct() {
    date_default_timezone_set('Europe/Moscow');
  }

  public function getDatasFields() {
    $arrDatas = [];
    if(isset($_POST['writebtn']) && !empty($_POST['headpost']) && !empty($_POST['bodypost'])) {
      $arrDatas[] = $_POST['headpost'];
      $arrDatas[] = $_POST['bodypost'];
      $arrDatas[] = $_SESSION['login'];
      $arrDatas[] = date('d:m:Y H:i:s');      

      $res = new WriteArticleM();
      $res -> writeArticleToDB($arrDatas);
      
    } else {
      echo("Поля не заполнены");
    }
  }


}