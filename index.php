<?php
declare(strict_types=1);

spl_autoload_register(function (string $classNamespace) {
    $path = str_replace(['\\','App/'], ['/',''], $classNamespace);
    $path = "src/$path.php";
  
    require_once($path);
});
use App\View;

require_once("src/Utils/debug.php");
require_once("src/View.php");
$view = new View();
