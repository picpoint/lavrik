<?php



class CreateLog {                                           // класс контроллер создание лога за этот день
  
  public $path = __DIR__ . '/../logs';                      // путь до папки с файлами

  public function createLogs() {                            // метод создания логов
    $params = new GetVariousParameters();                   // вызываем класс который передаёт параметры
    $currentDate = $params -> getCurrentDate();             // получить текущую дату
    $currentIP = $params -> getCurrentIP();                 // получить текущий IP
    $currentURI = $params -> getCurrentURI();               // получить текущий адрес 
    $currentRefURI = $params -> getRefererURI();            // получить реферальный адрес

    $files = scandir($this->path);                          // сканим папку с файлами
    $elem = date('d_m_Y') . '.txt';                         // переменная содержащая имя текущего лога

    if(in_array($elem, $files)) {                           // если среди всех файлов есть файл с текущей датой
      $fp = fopen($this->path . '/' . $elem, 'a+');         // открываем файл
      fwrite($fp, $currentDate . '   ');                    // пишем текущую дату
      fwrite($fp, $currentIP . '   ');                      // пишем текущий IP
      fwrite($fp, $currentURI . '   ');                     // пишет текущий адрес
      fwrite($fp, $currentRefURI . PHP_EOL);                // пишем реферальный адрес
      fclose($fp);                                          // закрваем файл
    } else {
      $fp = fopen($this->path.'/'.$elem, 'a+');             // иначе просто создаём файл
      fclose($fp);
    }

  }


}