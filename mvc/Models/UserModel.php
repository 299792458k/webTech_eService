<?php

class UserModel extends DB {
    public function login($email, $password) {
        return $this->query("SELECT * FROM `user_account` WHERE `email`='$email' and `password`='$password' ");
    }

    public function register($item) {
        return $this->query("INSERT INTO `user_account`"
        . " (`username`, `address`, `phonenumber`, `email`, `password`)"
        . " VALUES ('$item->username', '$item->address', '$item->phonenumber','$item->email', '$item->password')");
    }
    
    public function getById($id) {
        $query = "SELECT * FROM user_account WHERE id=$id";
        return $this->query($query);
    }
    
    public function update($id, $password, $username, $phonenumber, $address) {
        $query = "UPDATE user_account SET"
                . " password='$password', username='$username', phonenumber='$phonenumber', address='$address'"
                    . " WHERE id=$id";
        return $this->query($query);
    } 
}
 