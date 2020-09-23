<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorization</title>
  <link rel="stylesheet" href="css/style.css">
</head>


<body>
  <section class="auth">
    <div class="auth__wrp">
      <div class="auth__headline">
        <h3>Авторизация</h3>
      </div>
      <div class="auth__blockform">
        <form method="POST" class="auth__authoriz">
          <input type="text" name="enterlogin">
          <input type="password" name="enterpassword">
          <button type="submit" name="enteringbtn">Войти</button>          
        </form>        
      </div>
    </div>
  </section>

</body>
</html>