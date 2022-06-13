<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('Core/Core.php');

use Core\Router;

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/register', ['controller' => 'User', 'action' => 'add']);  
Router::connect('/login', ['controller' => 'User', 'action' => 'login']);
Router::connect('/delete', ['controller' => 'User', 'action' => 'delete']);
Router::connect('/show', ['controller' => 'User', 'action' => 'show']);

