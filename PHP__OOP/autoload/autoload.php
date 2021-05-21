<?php

spl_autoload_register(function ($class) {

// $class =App\Http\Controllers\HomeControllers();

$namespace = "App\\";
$path = "app";

// $class = Http\Controllers\HomeControllers();
$class = str_replace('App\\' , '' , $class);
$file = __DIR__ . DIRECTORY_SEPARATOR . $path;

$file = $file . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

if (file_exists($file)){
    include($file);

}
});
