<?php



class AuthorizationC {
  
  public function getDatasFields() {
    $arrUsr = [];    
    
    if(isset($_POST['enteringbtn'])) {
      if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        
        echo("login - $login");
        echo("<br>");
        echo("password - $password");
        echo("<br>");
        echo("<br>");
        echo("<br>");

        $allUsrs = new AuthorizationM();
        $res = $allUsrs -> checkAuthorizUser();

        // print_r($res);

        foreach($res as $rs) {
          if(in_array($login, $rs)) {
            echo("YES!!!!");
            echo("<br>");
          } else {
            echo("no ...");
          }
        }
      
      } else {
        echo("Поля не заполнены....");
      }

    }

    

  }  



}