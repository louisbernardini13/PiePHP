<?php

require_once('./Core/Core.php');
use Core\Core;

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));

//require_once(implode(DIRECTORY_SEPARATOR, ['Core','autoload.php']));

$app = new Core();
$app->run();

?>