<?php



class WriteArticleC {                                                                     // контроллер запись поста 

  public function __construct() {
    date_default_timezone_set('Europe/Moscow');                                           // устанавливаем часовой пояс
  }

  public function getDatasFields() {                                                      // метод сбора данных по посту
    $arrDatas = [];
    if(isset($_POST['writebtn']) && !empty($_POST['headpost']) && !empty($_POST['bodypost'])) { // если нажата кнопка и поля заголовок и тело поста не пусты
      $arrDatas[] = $_POST['headpost'];                                                   // в массив записываем заголовок, тело поста, автора, время
      $arrDatas[] = $_POST['bodypost'];
      $arrDatas[] = $_SESSION['login'];
      $arrDatas[] = date('d:m:Y H:i:s');      

      echo($_POST['headpost']);
      echo("<br>");
      echo($_POST['bodypost']);
      echo("<br>");
      echo($_POST['ctg']);

      // $res = new WriteArticleM();                                                         // вызываем модель для записи данных в БД и передаём туда массив данных
      // $res -> writeArticleToDB($arrDatas);
      
    } else {
      echo("Поля не заполнены");                                                          // иначе поля не заполнены
    }
  }


}