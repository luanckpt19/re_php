<?php
//require_once ('autoload.php');

require_once('../vendor/autoload.php');
$product = new App\Product();
$homeControllers = new App\Http\Controllers\HomeControllers();

echo $homeControllers -> index() . '<br/>';

//scope variable

require_once 'test.php';
$variableGlobal = 10;

//Local scope
function test(){
    $variabaleInuction =15;
    return $variabaleInuction;
}
echo test();

echo $variableGlobal;
echo $test;
