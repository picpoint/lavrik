<?php



class ReadFolder {                                          // класс чтения папки с файлами

  public $path = __DIR__.'/../logs';                        // путь до папки с файлами

  public function readFolderContent() {                     // метод чтения папки и файлов
    $allfiles = scandir($this->path);                       // сканим папку

    foreach($allfiles as $file) {                           // перебираем получившийся массив
      if($file != '.' && $file != '..') {                   // если не ссылки на директории        
        echo("<a href="."../dist/dayLog.php".">$file</a>"); // выводим на страницу ссылки с именами файлов
      }
    }
  }

}