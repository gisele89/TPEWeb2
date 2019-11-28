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
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $IsUserLogged = $this->IsUserLogged();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$IsUserLogged);
  }

  function AdministrarUsuarios(){
     $usuarios = $this->modelUser->GetUsuario();
     $this->view->MostrarAdmin($usuarios);
  }
}

 ?>
