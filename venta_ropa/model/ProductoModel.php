<?php
/**
 *
 */
class ProductoModel
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


  function GetProductos(){

      //$sentencia = $this->db->prepare( "select * from producto");
      $sentencia = $this->db->prepare( "select producto.*, marca.nombre as nombre_categoria from producto inner join marca on producto.id_marca = marca.id_marca order by marca.nombre");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetMarcas(){
    $sentencia = $this->db->prepare( "select * from marca");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProducto($id){

      $sentencia = $this->db->prepare( "select * from producto where id_producto=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($nombre,$precio,$descripcion,$material,$id_marca){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre,precio,descripcion,material,id_marca) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombre,$precio,$descripcion,$material,$id_marca));
  }

  function BorrarProducto($idProducto){

    $sentencia = $this->db->prepare( "delete from producto where id_producto=?");
    $sentencia->execute(array($idProducto));
  }

/*  function CompletarTarea($id_tarea){

    $sentencia = $this->db->prepare( "update tarea set completada=1 where id=?");
    $sentencia->execute(array($id_tarea));
  }
*/
  function GuardarEditarProducto($id,$nombre,$precio,$descripcion,$material,$id_marca){
    $sentencia = $this->db->prepare( "update producto set nombre = ?, precio = ?, descripcion = ?, material = ?,id_marca = ? where id_producto=?");
    $sentencia->execute(array($nombre,$precio,$descripcion,$material,$id_marca,$id));
  }
}


 ?>
