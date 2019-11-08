
<?php
require_once("./model/ProductoModel.php");
require_once("./api/jsonView.php");
require_once("./api/apiController.php");
class ProductosApiController extends apiController{
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
  function addProducto($params=[]){
    $producto->$this->producto->get_data();
    $productoid=$this->model->InsertarProducto($producto->nombre,$producto->precio,$producto->descripcion,$producto->material,$producto->id_marca);
    $productoNuevo->$this->model->getProducto($productoid);
    if($productoNuevo){
      $this->view->response("Producto agregado", 200);
    }else $this->view->response("Producto no agregado", 404);
  }
  function deleteproducto($params=[]){
    $id=$params[':id'];
    $producto->$this->prodcuto->get_data($id);
    if($producto){
      $producto->$this->model->BorrarProducto($id);
      $this->view->response("Producto borrado", 200);
    }else $this->view->response("Producto no borrado", 404);
  }
  function updateProducto($params=[]){
    $id=$params[':id'];
    $producto->$this->producto->get_data($id);
    if($producto){
      $body=$this->get_data();
      $nombre=$body->nombre;
      $precio=$body->precio;
      $descripcion=$body->descripcion;
      $material=$body->material;
      $id_marca=$body->id_marca;
      $producto->$this->model->GuardarEditarProducto($id,$nombre, $precio, $descripcion, $material, $id_marca);
      $this->view->response("Producto actualizado", 200);
    }else $this->view->response("Producto no actualizado", 404);
  }
}
