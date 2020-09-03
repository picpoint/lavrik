<?php



class CreateLog {

  public $path = __DIR__ . '/logs';
  

  public function createLogs() {
    echo($this->path);
  }


}