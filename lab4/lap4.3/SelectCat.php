<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include_once './mysql.php';
$connect = new mysqli($server, $user, $pass, $mydb);
$SQLcmd = "SELECT * FROM categories";
$result = $connect->query($SQLcmd);
