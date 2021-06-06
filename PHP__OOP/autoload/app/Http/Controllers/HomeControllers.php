<?php
namespace App\Http\Controllers;
/*require_once (__DIR__ . ' /../../User.php');*/

use App\Product;
use App\Trail\Logger;
use App\Trail\UploadImages;
use App\User;

class HomeControllers {
    use UploadImages,Logger;

    public function index(){

//        $user = new User();
//        $users = $user ->getlistUser();
//        return $users;
//
//        $product = new Product();
//        $products = $product ->getlistProduct();
//        return $products;

        $string = $this -> uploadImages() . "logger" . $this->logger();
        return $string;
    }

}
