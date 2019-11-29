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
    if(isset($param) && $param[0] != ""){
      $id_producto = $param[0];
      $Producto = $this->model->GetProducto($id_producto);
      $Marcas = $this->model->GetMarcas();
      $Imagenes = $this->model->GetImagenesByProducto($id_producto);

      $this->view->MostrarEditarProducto("Editar Producto", $Producto, $Marcas,$Imagenes,$this -> IsAdmin());
    }
  }

  function agregarProducto(){
    //var_dump($this -> IsAdmin());
    if($this -> IsAdmin()){
      $Marcas = $this->model->GetMarcas();
      $this->view->MostrarAgregarProducto("Agregar Producto", $Marcas);
    } else header(ADMIN);
  }

  function GuardarEditarProducto(){
    if(isset($_POST["idForm"]) && $_POST["idForm"] != "" &&
    isset($_POST["nombreForm"]) && $_POST["nombreForm"] != "" &&
    isset($_POST["precioForm"]) && $_POST["precioForm"] != "" &&
    isset($_POST["descripcionForm"]) && $_POST["descripcionForm"] != "" &&
    isset($_POST["materialForm"]) && $_POST["materialForm"] != "" &&
    isset($_POST["marcaForm"]) && $_POST["marcaForm"] != ""){
      $id_producto = $_POST["idForm"];
      $nombre = $_POST["nombreForm"];
      $precio = $_POST["precioForm"];
      $descripcion = $_POST["descripcionForm"];
      $material = $_POST["materialForm"];
      $id_marca = $_POST["marcaForm"];

      $this->model->GuardarEditarProducto($id_producto,$nombre,$precio,$descripcion,$material,$id_marca);

      header(ADMIN);
    }
  }

  function GuardarNuevoProducto(){
    if(isset($_POST["nombreForm"]) && $_POST["nombreForm"] != "" &&
    isset($_POST["precioForm"]) && $_POST["precioForm"] != "" &&
    isset($_POST["descripcionForm"]) && $_POST["descripcionForm"] != "" &&
    isset($_POST["materialForm"]) && $_POST["materialForm"] != "" &&
    isset($_POST["marcaForm"]) && $_POST["marcaForm"] != ""){
      $nombre = $_POST["nombreForm"];
      $precio = $_POST["precioForm"];
      $descripcion = $_POST["descripcionForm"];
      $material = $_POST["materialForm"];
      $id_marca = $_POST["marcaForm"];

      $imagenes = $_FILES['images'];
      $tmp_path = $_FILES['images']['tmp_name'];
      $isImg = $this ->EsTipoImagen($imagenes);
      if ($isImg == true ){
        //var_dump($imagenes);
        $this->model->InsertarProducto($nombre,$precio,$descripcion,$material,$id_marca,$imagenes);
        header(ADMIN);
      }
      else{
        echo "formato no aceptado";
      }
    }
  }

  function BorrarProducto($param){
    if(isset($param) && $param[0] != ""){
    $this->model->BorrarProducto($param[0]);
    header(ADMIN);
  }
  }

  function BorrarImagen($param){
    if(isset($param) && $param[0] != ""){
      $id_imagen = $param[0];
      $id_producto = $param[1];

      $this->model->BorrarImagen($id_imagen);

      $Producto = $this->model->GetProducto($id_producto);
      $Marcas = $this->model->GetMarcas();
      $Imagenes = $this->model->GetImagenesByProducto($id_producto);

      $this->view->MostrarEditarProducto("Editar Producto", $Producto, $Marcas,$Imagenes,$this -> IsAdmin());
   }
  }

  function CompletarProducto($param){
    $this->model->CompletarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
  private function EsTipoImagen($imagenes){ 
    $nroImagenes = count([$imagenes['type']]);
    $isImg = true;
    $i=0;
    while ($i < $nroImagenes && $isImg){
      $imagen_type = $imagenes['type'][$i];
      if($imagen_type == "image/jpeg" || $imagen_type == "image/jpg" || $imagen_type == "image/png"){
        $isImg = true;
      }
      else{
        $isImg = false;
      }
      $i++;
    }
    return $isImg;
  }
}

?>
