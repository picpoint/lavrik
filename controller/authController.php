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

      echo("$pass - $value");
      echo("<br>");
      echo("<br>");
      echo("<br>");
      
      foreach($arrCombine as $key => $value) {
        if($log == $key && $pass = password_verify($pass, $value)) {
          echo("АВТОРИЗ");
          echo("<br>");
          echo("$log - $pass");
        } else {
          echo("not");
          echo("<br>");
          echo("$log - $pass");
          echo("<br>");
        }

      }



    } else {
      echo("Поля не заполнены");
    }
  }



}