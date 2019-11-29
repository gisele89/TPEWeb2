<?php

require_once  "./view/homeView.php";
require_once  "./view/ProductoView.php";
require_once  "./view/MarcaView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/MarcaModel.php";
require_once  "./model/CommentsModel.php";
require_once  "SecuredController.php";

class HomeController
{
  private $view;
  private $viewProducto;
  private $viewMarca;
  private $modelMarca;
  private $modelProducto;
  private $modelComments;
  private $Titulo;

  function __construct()
  {
    $this->view = new HomeView();
    $this->viewProducto = new ProductoView();
    $this->viewMarca = new MarcaView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->modelComments = new CommentModel();
    $this->Titulo = "Ver productos y marcas";
  }

  function Home(){
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $IsUserLogged = $this -> IsUserLogged();
      $IsAdmin = $this -> IsAdmin();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$IsUserLogged,$IsAdmin);
  }

  function MostrarDetalleProducto($param){
      if(isset($param) && $param[0] != ""){
        $isAdmin = $this -> IsAdmin();
        $IsUserLogged = $this -> IsUserLogged();
        //var_dump($_SESSION["USERNAME"]);
        $id_producto = $param[0];
        //PRODUCTO
        $Producto = $this->modelProducto->GetProducto($id_producto);
        $Marcas = $this->modelMarca->GetMarcas();
        //PROMEDIO
        $promedio = $this->modelComments->promedioPuntuacion($id_producto);
        $Producto["promedio"] = $promedio->promedio;
        //var_dump($promedio);
        $Imagenes = $this->modelProducto->GetImagenesByProducto($id_producto);
        $id_usuario = $_SESSION['ID_USER'];
        $this->viewProducto->MostrarDetalleProducto("Ver Producto", $Producto, $Marcas, $Imagenes,$id_usuario,$isAdmin,$IsUserLogged);
    }
  }

  function MostrarDetalleMarca($param){
    if(isset($param) && $param[0] != ""){
      $id_marca = $param[0];
      $Marca = $this->modelMarca->GetMarca($id_marca);
      $this->viewMarca->MostrarDetalleMarca("Ver Marca", $Marca);
    }
  }

  function IsAdmin(){
      return isset($_SESSION["USER_ADMIN"]) && $_SESSION["USER_ADMIN"] == 1;
  }

  function IsUserLogged(){
      return isset($_SESSION["USERNAME"]);
  }
}

 ?>
