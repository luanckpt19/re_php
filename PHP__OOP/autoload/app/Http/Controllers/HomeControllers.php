<?php
namespace App\Http\Controllers;
/*require_once (__DIR__ . ' /../../User.php');*/

use App\Product;
use App\User;

class HomeControllers{
    public function index(){

        $user = new User();
        $users = $user ->getlistUser();
        return $users;

        $product = new Product();
        $products = $product ->getlistProduct();
        return $products;
    }

}
