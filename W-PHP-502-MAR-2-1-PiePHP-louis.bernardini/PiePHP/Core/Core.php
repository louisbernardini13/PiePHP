<?php

namespace Core;

require_once('Router.php');

use Core\Router;
error_reporting(E_ALL);
ini_set("display_errors", 1);
class Core
{
    public function __construct(){
        
        require_once('src/routes.php');

    }
    public function run()
    {
        $urlt = $_SERVER['REQUEST_URI'];
        $url = substr($urlt, 7, strlen($urlt));

        if (($route = Router::get($url)) != null) {
            $controller = "\\Controller\\" . ucfirst($route["controller"]) . "Controller";
            $method = $route['action'] . "Action";
            //var_dump($method);
            $call = new $controller();
            $call->$method();
        }
        elseif (($array = RouterDynamic::get($url)) != null) {
            $controller = ucfirst($array[0]);
            $method = $array[1];
            $call = new $controller();
            $call->$method();
        } else {
            echo "404";
        }
    }
}

?>