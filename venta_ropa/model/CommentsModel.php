<?php
class CommentModel
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

  function GetComments(){
      $sentencia = $this->db->prepare( "select * from comment");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComment($id){
      $sentencia = $this->db->prepare( "select * from comment where id_comment=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function addComment($comentario,$fecha,$puntuacion, $id_usuario, $id_producto){
    $sentencia = $this->db->prepare("INSERT INTO comment(comentario,fecha,puntuacion,id_usuario, id_producto) VALUES(?,?,?)");
    $sentencia->execute(array($comentario,$fecha,$puntuacion, $id_usuario, $id_producto));
    return $this->db->lastInsertId();
  }

  function deleteComment($id){
    $sentencia = $this->db->prepare( "delete from comment where id_comment=?");
    $sentencia->execute(array($id));
  }
}
 ?>
