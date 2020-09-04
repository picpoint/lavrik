<?php



class ReadFolder {

  public $path = __DIR__.'/../logs';

  public function readFolderContent() {
    // print_r(scandir($this->path));
    $allfiles = scandir($this->path);

    foreach($allfiles as $file) {      
      if($file != '.' && $file != '..') {
        // echo($file);
        // echo("<br>");
        echo("<a href="."http://localhost/www/lavrik/logs/$file".">$file</a>");
        // echo("<a href="."$this->path/$file".">$file</a>");
        // echo("<br>");
        // echo($this->path.'/'.$file);
        // echo("<br>");
        // print_r($allfiles);
      }
    }
  }




}