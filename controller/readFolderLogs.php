<?php



class ReadFolder {

  public $path = __DIR__.'/../logs';

  public function readFolderContent() {
    // print_r(scandir($this->path));
    $allfiles = scandir($this->path);

    foreach($allfiles as $file) {      
      if($file != '.' && $file != '..') {
        echo($file);
        echo("<br>");
        echo("<a href=" . "$path/$file" . " >$file</a>");
      }
    }
  }




}