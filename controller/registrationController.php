<?php


class Registration {
  

  function getDatasFields() {
    $login = $_POST['regname'];
    $password = $_POST['regpass'];

    echo("$login - $password");
  }
  


}