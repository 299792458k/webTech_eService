<?php
class StatusModel extends DB{
    public function findAll() {
        return $this->query("SELECT * FROM status_product");
    }
}
