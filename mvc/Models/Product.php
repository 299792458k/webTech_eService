<?php
class Product {
    public $id;
    public $category_id;
    public $name;
    public $status_product_id;
    public $image;
    public $description;
    public $price_free_size;
    public $price_s;
    public $price_m;
    public $price_l;
   
    
    public function __construct($id, $category_id, $name, $status_product_id, $image,
            $description, $price_free_size, $price_s, $price_m, $price_l) {
        $this->id = $id;
        $this->category_id = $category_id;
        $this->name = $name;
        $this->status_product_id = $status_product_id;
        $this->image = $image;
        $this->description = $description;
        $this->price_free_size = $price_free_size;
        $this->price_s = $price_s;
        $this->price_m = $price_m;
        $this->price_l = $price_l;
    }
}
