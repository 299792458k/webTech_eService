<?php

class CategoryModel extends DB{    
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll() {
        return $this->query("SELECT * FROM category");
    }
}
