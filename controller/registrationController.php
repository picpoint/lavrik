<?php

require_once "../model/getAllUsersModel.php";


class RegistrationC {
  public $arrFields = [];
  public $arrUsers = [];
  

  function getDatasFields() {
    if(isset($_POST['regbtn'])) {            

      if(!empty($_POST['reglogin']) && !empty($_POST['regpass'])) {
        $allUsers = new GetAllUsersM();        
        $datas = $allUsers -> getAllUsersLogin();

        foreach($datas as $data) {
          foreach($data as $key => $value) {
            $arrUsers[] = mb_strtolower($value);
          }
        }

        if(in_array(mb_strtolower($_POST['reglogin']), $arrUsers)) {
          echo("Такой пользователь уже зарегистрирован");
        } else {
          $regLogin = trim($_POST['reglogin']);
          $regPassword = trim($_POST['regpass']);

          $arrFields[] = $regLogin;
          $arrFields[] = password_hash($regPassword, PASSWORD_DEFAULT);
          
          $reg = new RegistrationM($arrFields);
          $reg -> writeUsersToDB();
          $_SESSION['user'] = $_POST['reglogin'];
          header('location: ../dist/userPage.php');
        }
      } else {
        echo("Поля не заполнены");
      }

    }

    
  }


  
  


}