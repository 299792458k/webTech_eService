<?php

class SinhVienModel extends DB {
    public function getAll() {
        return $this->query('SELECT * FROM sinhvien');
    }
}
