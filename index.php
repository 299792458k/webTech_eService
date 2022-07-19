<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
session_start();
require_once './mvc/Bridge.php';
$myApp = new App();