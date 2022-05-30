<?php

class App {

    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    function __construct() {
        $url = $this->processUrl();
        // get Controller
        if (!$url) {
//            require_once './mvc/Controllers/' . $this->controller . ".php";
//            $this->controller = new $this->controller;
//            call_user_func_array([$this->controller, $this->action], $this->params);
            header('Location: home/index');
        } else {
            if (file_exists("./mvc/Controllers/" . $url[0] . "Controller.php")) {
                $this->controller = $url[0] . "Controller";
            }
            unset($url[0]);
            require_once './mvc/Controllers/' . $this->controller . ".php";
            $this->controller = new $this->controller;

            // get Action
            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->action = $url[1];
                }
            }
            unset($url[1]);

            //get Params
            $this->params = $url ? array_values($url) : [];

            // call controller function
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    // handle url (route)
    function processUrl() {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], '/')));
        }
    }

}
