<?php
declare(strict_types=1);


spl_autoload_register(function (string $classNamespace) {
    $path = str_replace(['\\','App/'], ['/',''], $classNamespace);
    $path = "src/$path.php";
  
    require_once($path);
});
use App\Controller\ListController;

require_once("src/Utils/debug.php");
require_once("src/Controller/ListController.php");

$data = ["get"=>$_GET,"post"=>$_POST];
(new ListController($data))->showPage();
