<?php


class RegistrationC {
  public $arrFields = [];
  

  function getDatasFields() {
    if(isset($_POST['regbtn'])) {
      
      $allLogins = new RegistrationM($arrFields);
      print_r($allLogins -> getAllUsersLogin());


      if(!empty($_POST['reglogin']) && !empty($_POST['regpass'])) {
        $login = trim($_POST['reglogin']);
        $password = trim($_POST['regpass']);

        $arrFields[] = $login;
        $arrFields[] = password_hash($password, PASSWORD_DEFAULT);
        print_r($arrFields);

        $reg = new RegistrationM($arrFields);
        $reg -> writeUsersToDB();        
      } else {
        echo("Поля не заполнены");
      }

    }

    
  }


  
  


}