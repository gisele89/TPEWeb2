<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
    $user = $_POST["usuarioId"];
    $pass = $_POST["passwordId"];
    $dbUser = $this->model->getUser($user);

    if(isset($dbUser)){
      //Generate hash pass with http://www.passwordtool.hu/php5-password-hash-generator
      //$hash = password_hash($pass, PASSWORD_DEFAULT);

      if (password_verify($pass,$dbUser->pass)){
        //if ($pass == $dbUser[0]["pass"]){
        //mostrar lista de tareas
        session_start();
        $_SESSION["USERNAME"] = $user;
        $_SESSION['ID_USER'] = $dbUser ->id;
        $_SESSION['USER_ADMIN'] = $usuario ->isAdmin;
        header(ADMIN);
      }else{
        $this->view->mostrarLogin("Usuario o Contraseña incorrectos");
      }
    }else{
      //No existe el usario
      $this->view->mostrarLogin("Usuario o Contraseña incorrectos");
    }

  }
  function registrarUsuario(){
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    if(!empty($nombre) && !empty($email) && !empty($pass)){
      $usuario = $this-> model-> GetUserByEmail($email);//busco que si existe en la BBDD un usuario con ese email
      if($usuario == null){//sino existe
        //transformo la pass a hash
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);//hash a la password
        $this -> model -> InsertarUsuario($nombre, $email, $hash_pass);//lo envio al model
        //hasta acá anda
        $usuario = $this-> model-> GetUserByEmail($email);
        //obtengo el email de la BBDD igual al ingresado por el usuario
        if((!empty($usuario) && password_verify($pass, $usuario->pass))){
          session_start();
          $_SESSION['ID_USER'] = $usuario->id;
          $_SESSION['USERNAME'] = $usuario->nombre;
          $_SESSION['USER_ADMIN'] = $usuario->isAdmin;

          header(ADMIN);
          die();//Luego de una redirección se suele llamar a la función die() para forzar terminar la ejecución del script.
        }
        else {
          $this -> view -> mostrarRegistracion("El usuario no pudo ser registrado");
          // echo "Login incorrecto";
          die();
        }
      }
      else {
        //var_dump($usuario["pass"]);
        $this -> view -> mostrarRegistracion("Ya existe un usuario con el email ingresado");
        die();
      }
    }
    else{
      // $incorrecto = "faltaron completar campos obligatorios";
      $this -> view -> mostrarRegistracion("Falta completar algunos campos");                     // echo "Login incorrecto";
      die();
    }
  }

  function mostrarRegistracionUsuario(){
    $this-> view -> mostrarRegistracion();
  }
}

?>
