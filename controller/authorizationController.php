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
        
        // echo("login - $login");
        // echo("<br>");
        // echo("password - $password");
        // echo("<br>");
        // echo("<br>");
        // echo("<br>");

        $allUsrs = new AuthorizationM();
        $res = $allUsrs -> checkAuthorizUser();

        // print_r($res);

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
          echo("$key - $value");
          echo("<br>");
          if($login == $key) {
            echo("YES");
            echo("<br>");
          } else {
            echo("no...");
            echo("<br>");
          }
        }
      
      } else {
        echo("Поля не заполнены....");
      }

    }

    

  }  



}