<?php

class WishList extends DB {
    public function getAll() {
        return $this->query('SELECT * FROM wishers');
    }
}
