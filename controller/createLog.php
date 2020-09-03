<?php



class CreateLog {
  
  public $path = __DIR__ . '/../logs';
  
  

  public function createLogs() {
    $params = new GetVariousParameters();
    $currentDate = $params -> getCurrentDate();
    $currentIP = $params -> getCurrentIP();
    $currentURI = $params -> getCurrentURI();
    $currentRefURI = $params -> getRefererURI();

    $files = scandir($this->path);    
    $elem = date('d_m_Y') . '.txt';

    if(in_array($elem, $files)) {      
      $fp = fopen($this->path . '/' . $elem, 'a+');
      fwrite($fp, $currentDate . '   ');
      fwrite($fp, $currentIP . '   ');
      fwrite($fp, $currentURI . '   ');
      fwrite($fp, $currentRefURI . PHP_EOL);
      fclose($fp);
    } else {
      echo($elem);
      $fp = fopen($this->path.'/'.$elem, 'a+');      
      fclose($fp);
    }
    

    


  }


}