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

}





 ?>
