<?php

require_once  "./view/AdminView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/MarcaModel.php";
require_once  "./model/UsuarioModel.php";
require_once  "SecuredController.php";

class AdminController extends SecuredController
{
  private $view;
  private $modelMarca;
  private $modelProducto;
  private $modelUser;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new AdminView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->modelUser = new UsuarioModel();
    $this->Titulo = "Administar productos y marcas";
  }

  function Home(){
      $IsUserLogged = $this->IsUserLogged();
      $isAdmin = $this->IsAdmin();
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$IsUserLogged,$this->IsAdmin());
  }

  function AdministrarUsuarios(){
    //var_dump($this -> IsAdmin());
    if ($this -> IsAdmin()){
      $usuarios = $this->modelUser->GetUsuario();
      $this->view->MostrarAdmin($usuarios);
    }
    else header(ADMIN);
  }
}

 ?>
