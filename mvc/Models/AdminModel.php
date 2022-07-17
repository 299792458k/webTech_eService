<?php

class AdminModel extends DB {
    public function login($email, $password) {
        return $this->query("SELECT * FROM admin WHERE email='$email' and password='$password' ");
    }

}
 