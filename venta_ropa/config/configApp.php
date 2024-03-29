<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'admin'=> 'AdminController#Home',
      'home'=> 'HomeController#Home',
      'borrarProducto'=> 'ProductoController#BorrarProducto',
      'borrarMarca'=> 'MarcaController#BorrarMarca',
      'borrarImagen'=> 'ProductoController#BorrarImagen',
      'editarProducto'=> 'ProductoController#editarProducto',
      'editarMarca'=> 'MarcaController#editarMarca',
      'nuevoProducto'=> 'ProductoController#agregarProducto',
      'nuevaMarca'=> 'MarcaController#agregarMarca',
      'agregarMarca'=> 'MarcaController#agregarMarca',
      'guardarEditar'=> 'ProductoController#GuardarEditarProducto',
      'guardarEditarMarca'=> 'MarcaController#GuardarEditarMarca',
      'guardarProducto'=> 'ProductoController#GuardarNuevoProducto',
      'guardarMarca'=> 'MarcaController#GuardarNuevaMarca',
      'mostrarUsuarios'=> 'usuarioController#MostrarUsuario',
      'login'=> 'loginController#login',
      'logout'=> 'loginController#logout',
      'administrar'=> 'AdminController#AdministrarUsuarios',
      'verificarLogin' => 'loginController#verificarLogin',
      'registrarUsuario' => 'loginController#registrarUsuario',
      'mostrarRegistracionUsuario' => 'loginController#mostrarRegistracionUsuario',
      'eliminarUsuario'=>'usuarioController#BorrarUsuario',
      'convertirEnAdmin'=>'usuarioController#ConvertirEnAdmin',
      'quitarPermisosAdmin'=>'usuarioController#QuitarPermisosAdmin',
      'detalleProducto' => 'HomeController#MostrarDetalleProducto',
      'detalleMarca' => 'HomeController#MostrarDetalleMarca'
    ];

}
 ?>
