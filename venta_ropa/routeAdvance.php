<?php

require_once "config/configApp.php";
require_once "controller/AdminController.php";
require_once "controller/HomeController.php";
require_once "controller/ProductoController.php";
require_once "controller/MarcaController.php";
require_once "controller/usuarioController.php";
require_once "controller/loginController.php";
require_once "controller/securedController.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];


  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
   #$urlData[ACTION] = borrar
   #$urlData[PARAMS] = [1,2,3,4]

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> BorrarTarea
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller =  new HomeController();
      echo $controller->Home();
    }
}
 ?>
