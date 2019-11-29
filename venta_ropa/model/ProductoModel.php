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
    $sentencia = $this->db->prepare( "select producto.*, marca.nombre as nombre_categoria from producto inner join marca on producto.id_marca = marca.id_marca order by marca.nombre");
    $sentencia->execute();
    $productos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //$productoImagenes = [];
    foreach($productos as $producto){
            $sentencia_Imagenes = $this ->db ->prepare("SELECT * FROM imagenes WHERE id_producto = ?");
            $sentencia_Imagenes -> execute(array($producto['id_producto']));
            $imagenes = $sentencia_Imagenes->fetchAll(PDO::FETCH_ASSOC);
            $producto['imagenes'] = $imagenes;
            //$productoImagenes = $productos;
        }
        //return $productoImagenes;
        return $productos;
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

  function InsertarProducto($nombre,$precio,$descripcion,$material,$id_marca, $imagenes = null){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre,precio,descripcion,material,id_marca) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombre,$precio,$descripcion,$material,$id_marca));
    if($imagenes){
      $id_producto = $this->db->lastInsertId();
      $this->SubirImagenes($imagenes, $id_producto);
    }
  }

  function BorrarProducto($idProducto){
    $this -> BorrarImagenes($idProducto);
    $sentencia = $this->db->prepare( "delete from producto where id_producto=?");
    $sentencia->execute(array($idProducto));
  }

  function GuardarEditarProducto($id,$nombre,$precio,$descripcion,$material,$id_marca){
    $sentencia = $this->db->prepare( "update producto set nombre = ?, precio = ?, descripcion = ?, material = ?,id_marca = ? where id_producto=?");
    $sentencia->execute(array($nombre,$precio,$descripcion,$material,$id_marca,$id));
  }

  private function SubirImagenes($imagenes, $id_producto){
    $sentencia= $this ->db -> prepare("INSERT INTO imagenes(id_producto, path) VALUES (?,?)");
    $nroImagenes = count($imagenes['name']);
    for ($i = 0; $i < $nroImagenes; $i++){
      // var_dump(pathinfo($images['name'][$i],PATHINFO_EXTENSION)); die;
      $path_imagen = 'imagenes/' . uniqid() . "." . strtolower(pathinfo($imagenes['name'][$i],PATHINFO_EXTENSION));
      move_uploaded_file($imagenes['tmp_name'][$i], $path_imagen);
      $sentencia-> execute(array($id_producto, $path_imagen));
    }
  }

  function BorrarImagenes($id_producto){ //borro las imagenes de la tabla
    $sentencia = $this->db->prepare("DELETE FROM imagenes WHERE id_producto = ?");
    //preparo para inserta en la tabla de genero el nuevo genero
    $resultado = $sentencia->execute(array($id_producto));
    //if(!$resultado){
    //    var_dump($query->errorInfo());
    //    die();
    //  }
    return $resultado;
  }

  function BorrarImagen($id_imagen){ //borro las imagenes de la tabla
    $sentencia = $this->db->prepare("DELETE FROM imagenes WHERE $id_imagen = ?");
    //preparo para inserta en la tabla de genero el nuevo genero
    $resultado = $sentencia->execute(array($id_imagen));
    //if(!$resultado){
    //    var_dump($query->errorInfo());
    //    die();
    //  }
    return $resultado;
  }


  public function GetImagenesByProducto($id_producto){//busco las imagenes por id en la BBDD
     $sentencia = $this ->db ->prepare("SELECT * FROM imagenes WHERE id_producto = ?");
     $sentencia -> execute(array($id_producto));
     $imagenes = $sentencia->fetchAll(PDO::FETCH_OBJ);
     return $imagenes;
 }
}


?>
