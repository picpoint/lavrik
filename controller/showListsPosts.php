<?php



class ShowListPostsC {
  
  public function showList() {
    if($_SESSION['login'] == 'admin') {
      $result = new GetAllPostsM();
      $res = $result -> getAllPost("SELECT id, headpost, bodypost FROM articles WHERE moderation = 0");
      
      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          if($key == 'id') {
            $_GET['id'] = $value;          
          }
          if($key == 'headpost') {
            echo("<a href=" . "../view/moderPost.php?id=$_GET[id]" . ">$value</a>");
          }
        }
      }
            

    }
  }


}