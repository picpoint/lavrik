<?php



class AuthorizationC {
  
  public function getDatasFields() {
    $arrUsr = [];    
    
    if(isset($_POST['enteringbtn'])) {
      if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = trim($_POST['password']);
        
        echo("login - $login");
        echo("<br>");
        echo("password - $password");
        echo("<br>");
        echo("<br>");
        echo("<br>");


        $allUsers = new AuthorizationM();
        $allUsersData = $allUsers -> checkAuthorizUser();

        // print_r($allUsersData);

        foreach($allUsersData as $usrs) {
          foreach($usrs as $key => $value) {
            echo("$key - $value");
            echo("<br>");
            
            if($login == $key) {
              echo("******************ЛОГИН ВЕРНЫЙ****************");
              echo("<br>");
            } else {
              echo(".........логин не верный .......");
              echo("<br>");
            }

          }
        }



      }      
    }

  }  



}