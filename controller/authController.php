<?php



class AuthorizationC {

  public $arrLogs = [];
  public $arrPass = [];
  public $arrCombine = [];

  public function authUser() {
    if(isset($_POST['enteringbtn']) && $_POST['enterlogin'] && $_POST['enterpassword']) {
      $log = trim($_POST['enterlogin']);
      $pass = trim($_POST['enterpassword']);

      $allUsrs = new ReturnRecordsM();
      $resAllUsrs = $allUsrs -> returnRec("SELECT login, password FROM users");

      foreach($resAllUsrs as $res) {
        foreach($res as $key => $value) {
          if($key == 'login') {
            $arrLogs[] = $value;
          } else if($key == 'password') {
            $arrPass[] = $value;
          }          
        }       
      }

      
      $arrCombine = array_combine($arrLogs, $arrPass);    
      
      
      foreach($arrCombine as $key => $value) {
        if($log == $key && $pass == password_verify($pass, $value)) {
          $_SESSION['login'] = $log;
          header("location: userPage.php");
        } 
      }

      echo("Логин или пароль неправильны");


    } else {
      echo("Поля не заполнены");
    }
  }



}