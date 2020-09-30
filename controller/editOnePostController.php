<?php



class EditOnePostC {
  public $idPost;

  public function delOnePost() {
    $this->idPost = $_GET['id'];
    if(isset($_POST['delbtn'])) {      
      $makeRequest = new EditOnePostM();
      $makeRequest -> makeRequestForOnePost("DELETE FROM `articles` WHERE `articles`.`id` = '$this->idPost'");
      header('location: ../dist/userPage.php');
    }

  }


  public function publishPost() {
    $this->idPost = $_GET['id'];
    if(isset($_POST['aprbtn'])) {
      $pubPost = new EditOnePostM();
      $pubPost -> makeRequestForOnePost("UPDATE `articles` SET `moderation` = '1' WHERE `articles`.`id` = $this->idPost");
      header('location: ../dist/userPage.php');
    }
  }


}