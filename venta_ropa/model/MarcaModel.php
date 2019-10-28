<?php
/**
 *
 */
class MarcaModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=venta_ropa;charset=utf8'
    ,'root', '');
  }

  function GetMarcas(){

      $sentencia = $this->db->prepare( "select * from marca");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetMarca($id){

      $sentencia = $this->db->prepare( "select * from marca where id_marca=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarMarca($nombre,$site_url,$email){

    $sentencia = $this->db->prepare("INSERT INTO marca(nombre,site_url,email) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$site_url,$email));
  }

  function BorrarMarca($idMarca){

    $sentencia = $this->db->prepare( "delete from marca where id_marca=?");
    $sentencia->execute(array($idMarca));
  }

  function GuardarEditarMarca($id,$nombre,$site_url,$email){
    $sentencia = $this->db->prepare( "update marca set nombre = ?, site_url = ?, email = ? where id_marca=?");
    $sentencia->execute(array($nombre,$site_url,$email,$id));
  }
}


 ?>
