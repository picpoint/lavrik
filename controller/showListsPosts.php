<?php



class ShowListPostsC {
  
  public function showList() {
    if($_SESSION['login'] == 'admin') {
      $result = new GetAllPostsM();
      $res = $result -> getAllPost("SELECT headpost, bodypost FROM articles WHERE moderation = 0");
      
      // print_r($res);

      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          if($key == 'headpost') {
            // echo($value);
            // echo("<br>");
            echo("<a href=""></a>");
          }
        }
      }

    }
  }


}