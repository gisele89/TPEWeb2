
<?php
require_once("./model/MarcaModel.php");
require_once("./api/jsonView.php");
class marcasApiController{
  private $model;
  private $view;
  private $data;
  function __construct(){
    $this->model= new marcaModel();
    $this->view= new JSONView();
    $this->data= file_get_contents("php://input");
  }
  function get_data(){
    return json_decode($this->data);
  }
  function getMarcas($params=null){
    $marcas = $this->model->GetMarcas();
    $this->view->response($marcas,200);
  }
  function getMarca($params=null){
    $id=$params[':id'];
    $marca= $this->model->GetMarca($id);
    if($marca){
      $this->view->response($marca,200);
    } else $this->view->response("La marca no existe",404);
  }
  function addMarca($params=[]){
    $marca->$this->marca->get_data();
    $marcaid=$this->model->Insertarmarca($marca->nombre,$marca->site_url,$marca->email);
    $marcaNuevo->$this->model->getmarca($marcaid);
    if($marcaNuevo){
      $this->view->response("marca agregado", 200);
    }else $this->view->response("marca no agregado", 404);
  }
  function deletemarca($params=[]){
    $id=$params[':id'];
    $marca->$this->marca->get_data($id);
    if($marca){
      $marca->$this->model->Borrarmarca($id);
      $this->view->response("Marca borrada", 200);
    }else $this->view->response("Marca no borrada", 404);
  }
  function updatemarca($params=[]){
    $id=$params[':id'];
    $marca->$this->marca->get_data($id);
    if($marca){
      $body=$this->get_data();
      $nombre=$body->nombre;
      $site_url=$body->site_url;
      $email=$body->email;
      $marca->$this->model->GuardarEditarmarca($id,$nombre, $site_url, $email);
      $this->view->response("marca actualizado", 200);
    }else $this->view->response("marca no actualizado", 404);
  }
}
