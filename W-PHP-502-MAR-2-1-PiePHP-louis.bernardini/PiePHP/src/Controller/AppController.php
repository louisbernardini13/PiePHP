<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('Core/Request.php');
require_once('Core/Controller.php');

class AppController extends Controller{
    public function __construct()
    {
    $this->request = new Request;
    }
    public function indexAction() 
    {
      $message = "App index action";
      $this->render("index", ["message" => $message]);
    }
}

?>