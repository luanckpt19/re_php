<?php
namespace App;

class Product extends BaseModel {
    public function getlistProduct(){
        return 'list product';
    }

    public function createProduct(){
        return "<h2> Create baseModel from extends" . $this ->create() . "</h2>";

    }
}

