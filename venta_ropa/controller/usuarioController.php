<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";

class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
    $Usuarios = $this->model->GetUsuario();
    $this->view->Mostrar($this->Titulo, $Usuarios);
  }



  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];


    $this->model->InsertarUsuario($nombre,$pass);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  function BorrarUsuario($params){

    $id_usuario = $params [0];
    //var_dump("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) ."/administrar");
    $this->model->BorrarUsuario($id_usuario);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) ."/administrar");
  }
  function ConvertirEnAdmin($params){
    $id_usuario = $params [0];

    $this ->model ->ConvertirEnAdmin($id_usuario, 1);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) ."/administrar");
  }
  function QuitarPermisosAdmin($params){
    $id_usuario = $params [0];
  
    $this ->model ->ConvertirEnAdmin($id_usuario, 0);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) ."/administrar");
  }
}
?>
