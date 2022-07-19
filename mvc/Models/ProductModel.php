<?php

class ProductModel extends DB {
    public function add($product) {
        return $this->query("INSERT INTO product"
                . " (category_id, name, status_product_id, image, description,"
                . " price_free_size, price_s, price_m, price_l)"
                . " VALUES ($product->category_id, '$product->name', $product->status_product_id, '$product->image', '$product->description',"
                . " $product->price_free_size, $product->price_s, $product->price_m, $product->price_l )");
    }
    
    public function update($product) {
        return $this->query("UPDATE product SET category_id=$product->category_id, name='$product->name', status_product_id=$product->status_product_id, image='$product->image',"
                . " description='$product->description', price_free_size=$product->price_free_size, price_s=$product->price_s, price_m=$product->price_m, price_l=$product->price_l "
                . " WHERE id=$product->id");
    }
    
    public function findById($id) {
        $query = "SELECT * FROM product WHERE id=$id";
        return $this->query($query);
    }
    public function getAll() {
        $result = $this->query('SELECT * FROM product WHERE status_product_id = 1');
        return $result;
    }
    public function updateById($id) {
        $query = "UPDATE product SET status_product_id = 2 WHERE id=$id";
        return $this->query($query);
    }
    public function getAllByCategory($category) {
        $query = "SELECT * FROM product as p, category as c WHERE p.status_product_id=1 AND "
                . " p.category_id=c.id AND c.title='$category'";
        return $this->query($query);
    }
}

