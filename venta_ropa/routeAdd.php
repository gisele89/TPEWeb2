<?php
require_once('controllers/ProductoController.php');
require_once('controllers/Marcacontroller.php');
require_once('controllers/Logincontroller.php');
require_once('controllers/usuariocontroller.php');
require_once('Router.php');

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("VER", BASE_URL . 'ver');

$r = new Router();

// rutas
$r->addRoute("login", "GET", "LoginController", "showLogin");
$r->addRoute("verify", "POST", "LoginController", "verifyUser");
$r->addRoute("logout", "GET", "LoginController", "logout");
//-----------------------------------------------------------------------------------producto
$r->addRoute("productos", "GET", "productoApiController", "GetProductos");
$r->addRoute("productos/:ID", "GET", "productoApiController", "GetProducto");
$r->addRoute("productos/:ID", "DELETE", "productoApiController", "deleteProducto");
$r->addRoute("productos", "POST", "productoApiController", "addProducto");
$r->addRoute("productos", "PUT", "productoApiController", "updateProducto");
//------------------------------------------------------------------------------------marca
$r->addRoute("ver", "GET", "marcasApiController", "Home");
$r->addRoute("tarea/:ID", "GET", "marcasApiController", "getMarca");
$r->addRoute("eliminar/:ID", "DELETE", "marcasApiController", "deleteMarca");
$r->addRoute("nueva", "POST", "marcasApiController", "addmarca");
$r->addRoute("nueva", "PUT", "marcasApiController", "updateMarca");
//------------------------------------------------------------------------------------
//Ruta por defecto.
$r->setDefaultRoute("productoApiController", "Home");
$r->setDefaultRoute("marcasApiController", "Home");
$r->setDefaultRoute("LoginController", "Home");
$r->setDefaultRoute("usuarioController", "Home");
//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
<?>
