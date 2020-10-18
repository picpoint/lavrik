<?php



class EditOnePostC {                                                                    // контроллер редактирования одного поста админом
  public $idPost;

  public function delOnePost() {                                                        // метод удаления нужного поста
    $this->idPost = $_GET['id'];                                                        // $this->idPost присваиваем id нужного поста из ГЕТ-а
    if(isset($_POST['delbtn'])) {                                                       // если кнопка "удалить" нажата
      $makeRequest = new EditOnePostM();                                                // вызываем модель редактирования
      $makeRequest -> makeRequestForOnePost("DELETE FROM `articles` WHERE `articles`.`id_articles` = '$this->idPost'");  // в модель передаём запрос на удаление
      header('location: ../dist/userPage.php');                                         // перебрасываем на страницу в ЛК
    }

  }


  public function publishPost() {                                                       // опубликовать пост
    $this->idPost = $_GET['id'];                                                        // $this->idPost присваиваем id нужного поста из ГЕТ-а
    if(isset($_POST['aprbtn'])) {                                                       // если нажата кнопка "Допустить к публикации"
      $pubPost = new EditOnePostM();                                                    // вызываем модель редактирования
      $pubPost -> makeRequestForOnePost("UPDATE `articles` SET `moderation` = '1' WHERE `articles`.`id_articles` = $this->idPost"); // в модель передаём запрос на редактирование
      header('location: ../dist/userPage.php');                                         // перебрасываем на страницу в ЛК
    }
  }


}