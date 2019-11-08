
<?php
require_once('router.php');
require_once('./api/productosApiController.php');
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
$r->addRoute("productos", "GET", "ProductosApiController", "getProductos");
$r->addRoute("productos/:ID", "GET", "ProductosApiController", "getProducto");
$r->addRoute("productos/:ID", "DELETE", "ProductosApiController", "deleteProducto");
$r->addRoute("productos", "POST", "ProductosApiController", "addProducto");
$r->addRoute("productos", "PUT", "ProductosApiController", "updateProducto");
//------------------------------------------------------------------------------------marca
$r->addRoute("marcas", "GET", "marcasApiController", "Home");
$r->addRoute("marcas/:ID", "GET", "marcasApiController", "getMarca");
$r->addRoute("marcas/:ID", "DELETE", "marcasApiController", "deleteMarca");
$r->addRoute("marcas", "POST", "marcasApiController", "addmarca");
$r->addRoute("marcas", "PUT", "marcasApiController", "updateMarca");
//------------------------------------------------------------------------------------
//Ruta por defecto.
$r->setDefaultRoute("productoApiController", "Home");
$r->setDefaultRoute("marcasApiController", "Home");
$r->setDefaultRoute("LoginController", "Home");
$r->setDefaultRoute("usuarioController", "Home");
//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
<?>
