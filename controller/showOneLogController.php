<?php



class ShowOneLog {                                                        // класс вывода на странице конкретного лога
  
  public function readCoockie() {                                         // метод чтения определённой куки
    $coockie = $_COOKIE['clickLinkDay'];                                  // читаем в переменную куку
    return $coockie;                                                      // возвращаем куку
  }
  

  public function readThisLog() {                                         // метод вывода конкретного лога
    $path = __DIR__.'/../logs';                                           // путь до папки с логами
    $files = scandir($path);                                              // сканим папку

    foreach($files as $file) {                                            // перебираем получившийся массив
      if($file == $this->readCoockie()) {                                 // если имя файла совпадает с именем из куки
        $content = fopen("http://localhost/www/lavrik/logs/".$file, "r"); // читаем данный файл

        echo("
              <table>
                <tr>
                  <th>Дата</th>
                  <th>Время</th>
                  <th>IP</th>
                  <th>Адрес страницы</th>
                  <th>Реферальный адрес</th>
                </tr>
              </table>
            ");                                                            // выводим таблицу с заголовками

        while(!feof($content)) {                                           // пока не конец файла
          $line = fgets($content);                                         // читаем по строчно файл
          $datas = explode(' ', $line);                                    // разбиваем строку по пробелу
          echo("
              <table>
                <tr>
                  <td>".$datas[0]."</td>
                  <td>".$datas[1]."</td>
                  <td>".$datas[4]."</td>
                  <td>".$datas[7]."</td>
                  <td>".$datas[10]."</td>
                </tr>
              </table>
          ");                                                              // выводим в таблице нужные данные в нужных полях
        }
        fclose($content);                                                  // закрываем соединение с файлом
      }
    }    
    
  }


}