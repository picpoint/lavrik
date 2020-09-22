<?php



class AuthorizC {


  public function makeAuthoriz() {
    $arrLogs = [];
    $arrPass = [];
    $arrCombine = [];

    if(isset($_POST['enteringbtn']) && !empty($_POST['enterlogin']) && !empty($_POST['enterpassword'])) {
      $enterlogin = trim($_POST['enterlogin']);
      $enterpassword = trim($_POST['enterpassword']);

      echo($enterlogin);
      echo("<br>");
      echo($enterpassword);
      echo("<br>");
      echo("<br>");

      $usrsFromDB = new GetAllUsersM();
      $res = $usrsFromDB -> getAllUsrs();

      // echo("<br>");
      // echo("<br>");
      // print_r($res);
      // echo("<br>");
      
      foreach($res as $rs) {
        foreach($rs as $key => $value) {
          // echo("$key - $value");
          echo("<br>");

          if($key == 'login') {
            $arrLogs[] = $value;
          } else if($key == 'password') {
            $arrPass[] = $value;
          }
        }
      }

      $arrCombine = array_combine($arrLogs, $arrPass);

      // print_r($arrCombine);

      foreach($arrCombine as $key => $value) {
        echo("$key - $value");
        echo("<br>");

        if($enterlogin == $key && password_verify($enterpassword, $value)) {
          echo("YESSSSS!!!!!!!!!!!!!!!!!");
          echo("<br>");
        } else {
          echo("no .....");
          echo("<br>");
        }
      }



    } else {
      echo("Поля не заполнены");
    }
  }



}