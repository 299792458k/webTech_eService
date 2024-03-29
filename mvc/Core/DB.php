<?php

class DB extends mysqli {

    
    public $con;
    protected $dbHost = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $dbName = "laravel-api";
    //protected $user = "phpuser";
    //protected $pass = "phpuserpw";
    //protected $dbName = "wishlist";
   
    // auto connect to DB whenever a DB is instantiated
    // = mysqli_connect(dbhost,user,pass) + mysqli_select_db(con,dbName)
    public function __construct() {

        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);

        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

        parent::set_charset('utf-8');
    }
}
