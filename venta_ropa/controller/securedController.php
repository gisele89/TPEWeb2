<?php

class SecuredController
{
  function __construct(){
    session_start();
    if(isset($_SESSION["USERNAME"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
         $this->logout(); // destruye la sesión, y vuelve al login
      }
      $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header(LOGIN);
    }
  }

  function logout(){
    //session_start();
    session_destroy();
    header(LOGIN);
  }

  function IsUserLogged(){
      return isset($_SESSION["USERNAME"]);
  }

  function IsAdmin(){
      return isset($_SESSION["USER_ADMIN"]) && $_SESSION["USER_ADMIN"] == 1;
  }
}

 ?>
