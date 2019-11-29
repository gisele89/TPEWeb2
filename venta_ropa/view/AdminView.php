<?php
//require('./libs/Smarty.class.php');
/**
 *
 */
class AdminView
{
  private $Smarty;
  private $isAdmin;

  function __construct($isAdmin = false)
  {
    $this->$isAdmin = $isAdmin;
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Productos, $Marcas, $IsUserLogged,$isAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$IsUserLogged);
    $this->Smarty->assign('IsUserLogged',$IsUserLogged);
    $this->Smarty->assign('isAdmin',$isAdmin);
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
