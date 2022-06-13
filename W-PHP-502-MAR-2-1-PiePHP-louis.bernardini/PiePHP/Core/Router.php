<?php

namespace Core;

error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'src/routes.php';

class Router {
    
    private static $routes;
    public static $url;

    public static function connect($url, $route)
    {
        self::$routes[$url] = $route;
    }

    public static function get($url)
    {      
        if (isset(self::$routes[$url])) {
            print_r(self::$routes[$url]); 
            return self::$routes[$url];
        } else {
            return null;
        }
    }
}


class RouterDynamic
{
    public static function get($url)
    {      
        if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != null) {
            $url = $_SERVER['QUERY_STRING'];
            parse_str($url, $output);
            $controllerName = "\\Controller\\" . ucfirst(current($output)) . "Controller";
            $methodName = next($output). "Action";
        }
        else {
            $url = explode('/', $url);
          
            if (isset($url[2]) && method_exists("AppController", $url[2] . "Action")) {
                $controllerName = "AppController";
            } else if (!isset($url[2])) {
                $controllerName = "AppController";
            } else {
                $controllerName = ucfirst($url[2]) . "Controller";
            }

            if (isset($url[2]) && method_exists("AppController", $url[2] . "Action")) {
                $methodName = $url[2] . "Action";
            } else if (!isset($url[3])) {
                $methodName = "indexAction";
            } else {
                $methodName = $url[3] . "Action";
            }
        }

        if (class_exists($controllerName)) {
            $array[] =  $controllerName;
            if (method_exists($controllerName, $methodName)) {
                array_push($array, $methodName);
                return $array;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}




?>