<?php

require_once  "./view/ProductoView.php";
require_once  "./model/ProductoModel.php";
require_once  "SecuredController.php";

class ProductoController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new ProductoView();
    $this->model = new ProductoModel();
    $this->Titulo = "Lista de Productos";
  }

  function Home(){
      $Productos = $this->model->GetProductos();
      $this->view->Mostrar($this->Titulo, $Productos);
  }

  function editarProducto($param){
      $id_producto = $param[0];

      $Producto = $this->model->GetProducto($id_producto);
      $Marcas = $this->model->GetMarcas();

      $this->view->MostrarEditarProducto("Editar Producto", $Producto, $Marcas);
  }

  function agregarProducto(){
    $Marcas = $this->model->GetMarcas();
    $this->view->MostrarAgregarProducto("Agregar Producto", $Marcas);
  }

  function GuardarEditarProducto(){
    $id_producto = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
    $descripcion = $_POST["descripcionForm"];
    $material = $_POST["materialForm"];
    $id_marca = $_POST["marcaForm"];

    $this->model->GuardarEditarProducto($id_producto,$nombre,$precio,$descripcion,$material,$id_marca);

    header(ADMIN);
  }

  function GuardarNuevoProducto(){
    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
    $descripcion = $_POST["descripcionForm"];
    $material = $_POST["materialForm"];
    $id_marca = $_POST["marcaForm"];

    $this->model->InsertarProducto($nombre,$precio,$descripcion,$material,$id_marca);

    header(ADMIN);
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(ADMIN);
  }

  function CompletarProducto($param){
    $this->model->CompletarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}

 ?>
