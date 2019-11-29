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
    if(isset($_POST["usuarioId"]) && $_POST["usuarioId"] != "" &&
       isset($_POST["passwordId"]) && $_POST["passwordId"] != ""){
      $nombre_usuario = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $usuario = $this->model->getUser($nombre_usuario);

      if(isset($usuario)){
        //Generate hash pass with http://www.passwordtool.hu/php5-password-hash-generator
        //$hash = password_hash($pass, PASSWORD_DEFAULT);

        if (password_verify($pass,$usuario->pass)){
          session_start();
          $_SESSION["USERNAME"] = $nombre_usuario;
          $_SESSION['ID_USER'] = $usuario ->id;
          $_SESSION['USER_ADMIN'] = $usuario ->isAdmin;
          header(ADMIN);
        }else{
          $this->view->mostrarLogin("Usuario o Contraseña incorrectos");
        }
      }else{
        //No existe el usario
        $this->view->mostrarLogin("Usuario o Contraseña incorrectos");
      }
    } else $this->view->mostrarLogin("Falta completar algunos campos");
  }

  function registrarUsuario(){

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    if(!empty($nombre) && !empty($email) && !empty($pass)){
      $usuario = $this-> model-> GetUserByEmail($email);
      if($usuario == null){//sino existe
        //transformo la pass a hash
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);//hash a la password
        $this -> model -> InsertarUsuario($nombre, $email, $hash_pass);//lo envio al model
        $usuario = $this-> model-> GetUserByEmail($email);
        if((!empty($usuario) && password_verify($pass, $usuario->pass))){
          session_start();
          $_SESSION['ID_USER'] = $usuario->id;
          $_SESSION['USERNAME'] = $usuario->nombre;
          $_SESSION['USER_ADMIN'] = $usuario->isAdmin;

          header(ADMIN);
          die();
        }
        else {
          $this -> view -> mostrarRegistracion("El usuario no pudo ser registrado");

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

      $this -> view -> mostrarRegistracion("Falta completar algunos campos");                  
    }
  }

  function mostrarRegistracionUsuario(){
    $this-> view -> mostrarRegistracion();
  }
}

?>
