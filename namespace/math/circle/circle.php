<?php
namespace math\circle;
use math\constant;

require_once __DIR__ . '/../constant.php';
class circle{
    public function getAreaCircle($radius){
        return constant::PI * $radius * $radius;
    }
}
