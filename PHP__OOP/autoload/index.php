<?php
/*require_once ('app/Http/Controllers/HomeControllers.php');*/
require_once ('autoload.php');
$homeControllers = new App\Http\Controllers\HomeControllers();

echo $homeControllers -> index();
