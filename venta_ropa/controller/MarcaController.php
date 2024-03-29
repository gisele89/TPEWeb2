<?php

require_once  "./view/MarcaView.php";
require_once  "./model/MarcaModel.php";
require_once  "SecuredController.php";

class MarcaController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new MarcaView();
    $this->model = new MarcaModel();
    $this->Titulo = "Lista de Marcas";
  }

  function Home(){
      $Marcas = $this->model->GetMarcas();
      $this->view->Mostrar($this->Titulo, $Marcas);
  }

  function agregarMarca(){
    $this->view->MostrarAgregarMarca("Agregar Marca");
  }

  function EditarMarca($param){
    if(isset($param) && $param[0] != ""){
      $id_marca = $param[0];
      $Marca = $this->model->GetMarca($id_marca);
      $this->view->MostrarEditarMarca("Editar Marca", $Marca);
    }
  }

  function GuardarNuevaMarca(){
    if(isset($_POST["nombreForm"]) && $_POST["nombreForm"] != "" &&
       isset($_POST["site_urlForm"]) && $_POST["site_urlForm"] != "" &&
       isset($_POST["emailForm"]) && $_POST["emailForm"] != ""){
      $nombre = $_POST["nombreForm"];
      $site_url = $_POST["site_urlForm"];
      $email = $_POST["emailForm"];

      $this->model->InsertarMarca($nombre,$site_url,$email);

      header(ADMIN);
    }
  }

  function GuardarEditarMarca(){
    if(isset($_POST["idForm"]) && $_POST["idForm"] != "" &&
       isset($_POST["nombreForm"]) && $_POST["nombreForm"] != "" &&
       isset($_POST["site_urlForm"]) && $_POST["site_urlForm"] != "" &&
       isset($_POST["emailForm"]) && $_POST["emailForm"] != ""){
      $id_marca = $_POST["idForm"];
      $nombre = $_POST["nombreForm"];
      $site_url = $_POST["site_urlForm"];
      $email = $_POST["emailForm"];
      $this->model->GuardarEditarMarca($id_marca,$nombre,$site_url,$email);

      header(ADMIN);
   }
  }

  function BorrarMarca($param){
    $this->model->BorrarMarca($param[0]);
    header(ADMIN);
  }
}

 ?>
