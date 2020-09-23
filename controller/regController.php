<?php



class RegistrationC {
  
  public function regMethod() {
    $arrAllUsers = [];

    if(isset($_POST['regbtn']) && !empty($_POST['reglog']) && !empty($_POST['regpass'])) {
      $reglog = trim($_POST['reglog']);  
      $regpass = trim($_POST['regpass']);    
      
      $allUsers = new ReturnRecordsM();
      $res = $allUsers -> returnRec("SELECT login, password FROM `users`");
      
      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          if($key == 'login') {
            $arrAllUsers[] = $value;
          }
        }
      }

      if(in_array($reglog, $arrAllUsers)) {
        echo("Такой пользователь уже существует");
        echo("<br>");
      } else {
        $resultReg = new RegistrationUsersM();
        $resultReg -> regUser($reglog, password_hash($regpass, PASSWORD_DEFAULT));
      }
    
    } else {
      echo("Поля не заполнены");
    }

  }


}

