<?php



class AuthorizationC {
  
  public function getDatasFields() {
    $arrUsr = [];
    
    if(isset($_POST['enteringbtn'])) {
      if(!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $arrUsr[] = $login;
        $arrUsr[] = $password;        

        print_r($arrUsr);
        
      } else {
        echo("Поля не заполнены");
      }
      
    }

  }  



}