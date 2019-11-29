<?php
/**
 *
 */
class UsuarioModel
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

  function GetUsuario(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre,$email, $pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,email, pass) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$email, $pass));
  }

  function GetUser($user){
      $sentencia = $this->db->prepare( "select * from usuario where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }
  function GetUserByEmail($email){
      $sentencia = $this->db->prepare( "select * from usuario where email=? limit 1");
      $sentencia->execute(array($email));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  public function BorrarUsuario($id_usuario){
     $sentencia  = $this->db->prepare("DELETE FROM usuario WHERE id = ?");
     $sentencia->execute(array($id_usuario));
 }
 public function ConvertirEnAdmin($id_usuario, $isAdmin){
        $sentencia= $this->db->prepare("UPDATE usuario SET isAdmin = ? WHERE id = ? ");
        $sentencia->execute(array($isAdmin, $id_usuario));
    }

}







 ?>
