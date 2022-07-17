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

}
 