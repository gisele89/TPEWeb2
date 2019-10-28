<?php
//require_once('./libs/Smarty.class.php');
/**
 *
 */
class MarcaView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Marcas){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marcas',$Marcas); // tablas (?)
    $smarty->debugging = true;
    $this->Smarty->display('templates/marca.tpl');
  }

  function MostrarEditarMarca($Titulo, $Marca){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marca',$Marca);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarMarca.tpl');
  }

  function MostrarAgregarMarca($Titulo){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    //$this->Smarty->assign('Producto',$Producto);
    //$this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    $smarty->debugging = true;
    $this->Smarty->display('templates/MostrarAgregarMarca.tpl');
  }

  function MostrarDetalleMarca($Titulo, $Marca){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marca',$Marca);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarDetalleMarca.tpl');
  }

}

 ?>
