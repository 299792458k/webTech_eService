<?php

class HomeController extends BaseController {

    public function index() {
        $pizza = $this->model('ProductModel')->getAllByCategory('Combo');
        $dessert = $this->model('ProductModel')->getAllByCategory('Pizza');
        $product = $this->model('ProductModel')->getAll();
        $this->view('User/webpage', ['pizza'=>$pizza, 'dessert'=>$dessert, 'product'=>$product]);
    }

}
