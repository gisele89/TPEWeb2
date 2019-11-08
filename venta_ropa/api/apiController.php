<?php
abstract class apiController{
  private $model;
  private $view;
  private $data;
  function __construct(){
    $this->model= new marcaModel();
    //$this->model=new ProductoModel();
    $this->view= new JSONView();
    $this->data= file_get_contents("php://input");
  }
  function get_data(){
    return json_decode($this->data);
  }
}
?>
