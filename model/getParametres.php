<?php



class GetVariousParameters {                                // класс получение параметров 
    
  
  public function getCurrentDate() {                        // метод получения текущей даты
    date_default_timezone_set('Europe/Moscow');             // определяем часовой пояс
    return date("d:m:Y H:i:s");                             // получаем полную текущую дату и полное время
  }


  public function getToday() {                              // метод получения только текущей даты
    return date('d_m_Y');
  }


  public function getCurrentIP() {                          // метод получения своего IP
    return $_SERVER['REMOTE_ADDR'];
  }


  public function getCurrentURI() {                         // метод получения текущего адреса
    return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  }


  public function getRefererURI() {                         // метод получения реферальной ссылки
    return $_SERVER['HTTP_REFERER'];
  }



}