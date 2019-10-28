<?php
//require_once('./libs/Smarty.class.php');
/**
 *
 */
class ProductoView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Productos){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $smarty->debugging = true;
    $this->Smarty->display('templates/producto.tpl');
  }

  function MostrarEditarProducto($Titulo, $Producto, $Marcas){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    $smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarProducto.tpl');
  }

  function MostrarDetalleProducto($Titulo, $Producto, $Marcas){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    
    $this->Smarty->display('templates/MostrarDetalleProducto.tpl');
  }

  function MostrarAgregarProducto($Titulo, $Marcas){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    //$this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    $smarty->debugging = true;
    $this->Smarty->display('templates/MostrarAgregarProducto.tpl');
  }

}

 ?>
