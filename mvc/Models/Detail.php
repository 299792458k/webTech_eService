<?php
class Detail {
    public $id;
    public $order_id;
    public $product_name;
    public $product_price;
    public $product_image;
    public $quatity;
    public $product_size;
   
    public function __construct($id, $order_id, $product_name, $product_image, 
    $product_price, $product_size, $quatity) {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_size = $product_size;
        $this->quatity = $quatity;
        $this->product_image = $product_image;
    }
}
