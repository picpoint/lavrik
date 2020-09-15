<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  require_once "../controller/registrationController.php";
  require_once "../model/registrationModel.php";
?>
  
  <section class="reg">
    <div class="reg__wrp">
      <div class="reg__hdr">
        <h3>Регистрация</h3>
      </div>
      <div class="reg__regblock">
        <form method="POST" class="reg__form">
          <input type="text" name="reglogin" placeholder="Логин">
          <input type="password" name="regpass" placeholder="Пароль">
          <button type="submit" name="regbtn">РЕГИСТРАЦИЯ</button>          
        </form>
      </div>
      <?php
        $res = new RegistrationC();
        $res -> getDatasFields();
      ?>
    </div>
  </section>


</body>
</html>