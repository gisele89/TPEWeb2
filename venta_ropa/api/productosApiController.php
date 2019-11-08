<?php
require_once("./model/ProductoModel.php");
require_once("./api/jsonView.php");
class ProductosApiController{
  private $model;
  private $view;
  private $data;

  function __construct(){
    $this->model= new ProductoModel();
    $this->view= new JSONView();
    $this->data= file_get_contents("php://input");
  }

  function get_data(){
    return json_decode($this->data);
  }

  function getProductos($params=null){
    $productos = $this->model->GetProductos();
    $this->view->response($productos,200);
  }
  function getProducto($params=null){
    $id=$params[':id'];
    $producto= $this->model->GetProducto($id);
    if($producto){
       $this->view->response($producto,200);
    } else $this->view->response("El producto no existe",404);
  }

  function addProducto(){

  }
}






?>
