<?php



class RegistrationC {                                                                       // контроллер регистрации 
  
  public function regMethod() {                                                             // метод регистрации
    $arrAllUsers = [];

    if(isset($_POST['regbtn']) && !empty($_POST['reglog']) && !empty($_POST['regpass'])) {  // если нажата кнопка зарегаться и поля лог и пасс не пусты
      $reglog = trim($_POST['reglog']);                                                     // тримим поле и присваиваем значение переменной лог
      $regpass = trim($_POST['regpass']);                                                   // тримим поле и присваиваем значение переменной пасс
      
      $allUsers = new ReturnRecordsM();                                                     // вызываем модель которая возвращает записи по юзерам из бд
      $res = $allUsers -> returnRec("SELECT login, password FROM `users`");                 // делаем выборку всех пользователей
      
      foreach($res as $rs) {                                                                // перебираем результат который вернула модель
        foreach($rs as $key => $value) {
          if($key == 'login') {                                                             // если ключ == логину
            $arrAllUsers[] = mb_strtolower($value);                                         // в массив ложим значение в нижнем регистре
          }
        }
      }

      if(in_array(mb_strtolower($reglog), $arrAllUsers)) {                                  // если в массиве есть такой же логин, который есть в БД
        echo("Такой пользователь уже существует");                                          // уведомляем пользователя о наличие такой записи, т.е. кто то уже с таким логином зарегался
        echo("<br>");
      } else {
        $resultReg = new RegistrationUsersM();                                              // иначе вызываем модель для регистрации пользователя
        $resultReg -> regUser($reglog, password_hash($regpass, PASSWORD_DEFAULT));          // в модель передаём логин и хешированный пароль
        $_SESSION['login'] = $reglog;                                                       // в сессию записываем логин
        header('location: userPage.php');                                                   // перебрасываем пользователя в ЛК
      }
    
    } else {
      echo("Поля не заполнены");                                                            // иначе выдаём сообщение что какое то поле не заполнено
    }

  }


}

