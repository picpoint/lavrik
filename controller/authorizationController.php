<?php



class AuthorizationC {
  
  public function getDatasFields() {
    $arrUsr = [];    
    $arrLogin = [];
    $arrPassword = [];
    
    if(isset($_POST['enteringbtn'])) {
      if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        
        $allUsrs = new AuthorizationM();
        $res = $allUsrs -> checkAuthorizUser();

        foreach($res as $rs) {
          foreach($rs as $key => $value) {
            if($key == 'login') {
              $arrLogin[] = $value;
            } else if($key == 'password') {
              $arrPassword[] = $value;
            }
          }
        }

        $arrLogPass = array_combine($arrLogin, $arrPassword);

        // print_r($arrLogPass);

        foreach($arrLogPass as $key => $value) {
          echo("<br>");
          echo("$key - $value");
          echo("<br>");
          echo("PASS - $password");
          echo("<br>");          

          if($login == $key && $password == password_verify($password, $value)) {
            echo("!!!!!!!!YES USER!!!!!!!!!");
            echo("<br>");
          } else {
            echo("no....");
            echo("<br>");
          }

        }

              
      } else {
        echo("Поля не заполнены....");
      }

    }

    

  }  



}