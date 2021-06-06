<?php
namespace App;

class BaseModel{
    public function create(){
        return" Create Base Model";
    }
    public function createFromBaseModel(){
        return "<h2> Create baseModel from inside" . $this ->create() . "</h2>";
    }

}
