<?php
class User {
    public $id;
    public $username;
    public $address;
    public $phonenumber;
    public $email;
    public $password;
   
    public function __construct($id, $username, $address, $phonenumber, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->address = $address;
        $this->phonenumber = $phonenumber;
        $this->email = $email;
        $this->password = $password;
    }
}
