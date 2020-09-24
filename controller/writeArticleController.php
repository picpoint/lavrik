<?php



class WriteArticleC {

  public function getDatasFields() {
    if(isset($_POST['writebtn']) && !empty($_POST['headpost']) ) {
      echo($_POST['headpost']);
    }
  }


}