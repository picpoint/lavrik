<?php



class ShowOneLog {
  
  public function readCoockie() {
    $coockie = $_COOKIE['clickLinkDay'];
    return $coockie;    
  }
  

  public function readThisLog() {
    $path = __DIR__.'/../logs';
    $files = scandir($path);    

    foreach($files as $file) {
      if($file == $this->readCoockie()) {
        $content = fopen("http://localhost/lavrik/logs/".$file, "r");

        echo("
              <tr>
                <th>Дата</th>
                <th>Время</th>
                <th>IP</th>
                <th>Адрес страницы</th>
                <th>Реферальный адрес</th>
              </tr>
            ");

        echo("<br>");
        
        while(!feof($content)) {
          $line = fgets($content);          
          $datas = explode(' ', $line);
          echo("
                <tr>
                  <td>".$datas[0]."</td>
                  <td>".$datas[1]."</td>
                  <td>".$datas[4]."</td>
                  <td>".$datas[7]."</td>
                  <td>".$datas[10]."</td>
                </tr>
          ");
          echo("<br>");
        }
        fclose($content);
      }
    }


    
    
  }


}