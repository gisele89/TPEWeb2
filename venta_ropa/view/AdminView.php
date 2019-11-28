<?php
//require('./libs/Smarty.class.php');
/**
 *
 */
class AdminView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Productos, $Marcas, $IsUserLogged ){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$IsUserLogged);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/admin.tpl');
  }

  function MostrarAdmin($usuarios){
    $this->Smarty->assign('Titulo','Administrar usuarios');
    $this->Smarty->assign('usuarios',$usuarios);
    $this->Smarty->display('templates/administrarUsuarios.tpl');
  }

}

 ?>
