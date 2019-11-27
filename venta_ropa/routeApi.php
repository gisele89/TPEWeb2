<?php
require_once('router.php');
require_once('./api/CommentsApiController.php');
// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();

//-----------------------------------------------------------------------------------comment
$r->addRoute("comments", "GET", "CommentsApiController", "getComments");
$r->addRoute("comments/:id", "GET", "CommentsApiController", "getComment");
$r->addRoute("comments/:id", "DELETE", "CommentsApiController", "deleteComment");
$r->addRoute("comments", "POST", "CommentsApiController", "addComment");
$r->addRoute("products/:id/comments", "GET", "CommentsApiController", "getCommentsForProduct");

//Ruta por defecto.
$r->setDefaultRoute("CommentsApiController", "getComments");

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
?>
