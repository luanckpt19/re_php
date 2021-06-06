<?php
/*require_once ('app/Http/Controllers/HomeControllers.php');*/
//require_once ('autoload.php');

require_once ('vendor/autoload.php');
$product = new App\Product();
$homeControllers = new App\Http\Controllers\HomeControllers();

//echo $homeControllers -> index();

$baseModel = new App\BaseModel();

// Truy cập phương thức create từ bên ngoài class
echo $baseModel -> create();

// Truy cập phương thức create từ bên trong class đó
echo $baseModel->createFromBaseModel();

$product = new App\Product();
//Truy cập phương thức create từ lớp kế thừa
echo $product ->createProduct();