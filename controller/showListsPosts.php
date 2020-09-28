<?php



class ShowListPostsC {
  
  public function showList() {
    if($_SESSION['login'] == 'admin') {
      // echo('ADMIN');

      $result = new GetAllPostsM();
      $res = $result -> getAllPost("SELECT headpost, bodypost FROM articles WHERE moderation = 0");
      print_r($res);
    }
  }


}