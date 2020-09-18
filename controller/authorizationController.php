<?php



class AuthorizationC {
  
  public function getDatasFields() {
    $arrUsr = [];
    
    if(isset($_POST['enteringbtn'])) {
      if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        
        $arrUsr[] = $login;
        $arrUsr[] = $password;

        $res = new AuthorizationM();
        $resAuthModel = $res -> checkAuthorizUser();

        foreach($resAuthModel as $res) {
          foreach($res as $key => $value) {
            echo("$key - $value");
            echo("<br>");
            echo("LOGIN - $login");
            echo("<br>");

            if($_POST['login'] == $key) {
              echo("!!!!!!!!!!!!!Логин верный!!!!!!!!!");
            } else {
              echo("... лог не верный ......");
            }
          }
        }
        
      } else {
        echo("Поля не заполнены");
      }
      
    }

  }  



}