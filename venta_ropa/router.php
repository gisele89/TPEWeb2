<?php
require_once ('route.php');
class Router {
<<<<<<< HEAD
    private $routeTable = [];
    private $defaultRoute;

    public function __construct() {
        $this->defaultRoute = null;
=======
    private $url;
    private $verb;
    private $controller;
    private $method;
    private $params;

    public function __construct($url, $verb, $controller, $method){
        $this->url = $url;
        $this->verb = $verb;
        $this->controller = $controller;
        $this->method = $method;
        $this->params = [];
>>>>>>> 6ef53c7fdd0888cb18362d50795c62a09c6dc5ee
    }

    public function route($url, $verb) {
        //$ruta->url //no compila!
        foreach ($this->routeTable as $route) {
            if($route->match($url, $verb)){
                //TODO: ejecutar el controller//ejecutar el controller
                // pasarle los parametros
                $route->run();
                return;
            }
        }
        //Si ninguna ruta coincide con el pedido y se configuró ruta por defecto.
        if ($this->defaultRoute != null)
            $this->defaultRoute->run();
    }

    public function addRoute ($url, $verb, $controller, $method) {
        $this->routeTable[] = new Route($url, $verb, $controller, $method);
    }
<<<<<<< HEAD

    public function setDefaultRoute($controller, $method) {
        $this->defaultRoute = new Route("", "", $controller, $method);
=======
    public function run(){
        $controller = $this->controller;
        $method = $this->method;
        $params = $this->params;

        (new $controller())->$method($params);
>>>>>>> 6ef53c7fdd0888cb18362d50795c62a09c6dc5ee
    }
}

?>
