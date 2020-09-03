<?php



class GetVariousParameters {
    
  
  public function getCurrentDate() {
    date_default_timezone_set('Europe/Moscow');
    return date("d:m:Y H:i:s");
  }


  public function getCurrentIP() {
    return $_SERVER['REMOTE_ADDR'];
  }


  public function getCurrentURI() {
    return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  }


  public function getRefererURI() {
    return $_SERVER['HTTP_REFERER'];
  }



}