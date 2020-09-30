<?php



class ShowOnePostByIdC {

  public function showOnePost() {        
    $idPost = $_GET['id'];

    $res = new GetAllPostsM();
    $onePosts = $res -> getAllPost("SELECT headpost, bodypost FROM articles WHERE $idPost = id");
      
    foreach($onePosts as $pst) {
      foreach($pst as $key => $value) {                
        if($key == 'headpost') {
          echo("<div class=" . " mp__hdrpost" . ">");
            echo("<span>$value</span>");
          echo("</div>");
        } else if($key == 'bodypost') {
          echo("<div class=" . " mp__bdpost" . ">");
            echo("<span>$value</span>");
          echo("</div>");
        }
          
      }
    }

  }



}