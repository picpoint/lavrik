<?php



class RegistrationC {
  
  public function regMethod() {
    if(isset($_POST['regbtn']) && !empty($_POST['reglog']) && !empty($_POST['regpass'])) {
      $reglog = trim($_POST['reglog']);  
      $regpass = trim($_POST['regpass']);
    
      echo("$reglog - $regpass");
      echo("<br>");

      $allUsers = new ReturnRecordsM();
      $res = $allUsers -> returnRec("SELECT login, password FROM `users`");
      print_r($res);
    
    
    } else {
      echo("Поля не заполнены");
    }

  }


}

