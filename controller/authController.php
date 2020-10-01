<?php



class AuthorizationC {                                                                      // контроллер авторизации пользователя

  public $arrLogs = [];
  public $arrPass = [];
  public $arrCombine = [];

  public function authUser() {                                                              // ф-ия авторизации
    if(isset($_POST['enteringbtn']) && $_POST['enterlogin'] && $_POST['enterpassword']) {   // если нажата кнопка вход и поля лог и пасс не пустые
      $log = trim($_POST['enterlogin']);                                                    // из поля обрезаем пробелы и ложим результат в переменную
      $pass = trim($_POST['enterpassword']);                                                // аналогичное действие как и с прошлым полем, но для пароля

      $allUsrs = new ReturnRecordsM();                                                      // вызываем модель, которая возвращает логины и пароли
      $resAllUsrs = $allUsrs -> returnRec("SELECT login, password FROM users");             // передаём непосредственно сам запрос

      foreach($resAllUsrs as $res) {                                                        // перебираем данные из модели, которая вернула результат
        foreach($res as $key => $value) {
          if($key == 'login') {                                                             // если это был логин
            $arrLogs[] = $value;                                                            // значение помещаем в массив логинов $arrLogs[]
          } else if($key == 'password') {                                                   // иначе если был пароль
            $arrPass[] = $value;                                                            // значение помещаем в массив логинов $arrPass[]
          }          
        }       
      }

      
      $arrCombine = array_combine($arrLogs, $arrPass);                                      // комбинируем получившиеся массивы для удобного перебора
      
      
      foreach($arrCombine as $key => $value) {                                              // перебираем массив логинов и паролей
        if($log == $key && $pass == password_verify($pass, $value)) {                       // если логин == введённому и пароль прошёл проверку
          $_SESSION['login'] = $log;                                                        // в сессию записываем логин
          header("location: userPage.php");                                                 // перебрасываем на страницу ЛК
        } 
      }

      echo("Логин или пароль неправильны");                                                 // если какое то поле не прошло проверку - уведомляем юзВеря


    } else {
      echo("Поля не заполнены");                                                            // иначе если какое то поле было не заполнено, уведомляем юзверя
    }
  }



}