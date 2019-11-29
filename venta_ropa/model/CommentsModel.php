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
      $sentencia = $this->db->prepare( "select comment.*, usuario.nombre from comment inner join usuario on usuario.id = comment.id_usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComment($id){
      $sentencia = $this->db->prepare( "select * from comment where id_comment=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function GetCommentsByProduct($id_producto){
      $sentencia = $this->db->prepare( "select comment.*, usuario.nombre from comment inner join usuario on usuario.id = comment.id_usuario where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function addComment($comment,$fecha,$puntuacion, $id_usuario, $id_producto){
    $sentencia = $this->db->prepare("INSERT INTO comment(comment,fecha,puntuacion,id_usuario, id_producto) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($comment,$fecha,$puntuacion, $id_usuario, $id_producto));
    return $this->db->lastInsertId();
  }

  function deleteComment($id){
    $sentencia = $this->db->prepare( "delete from comment where id_comment=?");
    $sentencia->execute(array($id));
  }
 function promedioPuntuacion($id_producto){
       $sentencia = $this ->db ->prepare("SELECT ROUND(AVG(comment.puntuacion),2) AS promedio FROM comment WHERE id_producto = ?");
       $sentencia->execute(array($id_producto));
     $promedio =   $sentencia ->fetch(PDO::FETCH_OBJ);
     return $promedio;
 }
}
 ?>
