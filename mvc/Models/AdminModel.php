<?php

class AdminModel extends DB {
    public function login($email, $password) {
        return $this->query("SELECT * FROM admin WHERE email='$email' and password='$password' ");
    }
    
    public function getById($id) {
        $query = "SELECT * FROM admin WHERE id=$id";
        return $this->query($query);
    }
    
    public function update($id, $email,$password, $username) {
        $query = "UPDATE admin SET"
                . " email='$email', password='$password', name='$username'"
                    . " WHERE id=$id";
        return $this->query($query);
    } 
}
 