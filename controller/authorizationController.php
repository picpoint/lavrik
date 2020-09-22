<?php



class AuthorizC {


  public function makeAuthoriz() {
    if(isset($_POST['enteringbtn']) && !empty($_POST['enterlogin']) && !empty($_POST['enterpassword'])) {
      $enterlogin = trim($_POST['enterlogin']);
      $enterpassword = trim($_POST['enterpassword']);

      echo($enterlogin);
      echo("<br>");
      echo($enterpassword);

      $usrsFromDB = new GetAllUsersM();
      $res = $usrsFromDB -> getAllUsrs();

      foreach($res as $rs) {
        if(in_array($enterlogin, $rs)) {
          echo("YES!!!!!!!!!!!!!!!");
        } else {
          echo('no ....');
        }
      }

    } else {
      echo("Поля не заполнены");
    }
  }



}