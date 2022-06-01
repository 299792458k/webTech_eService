<?php

class HomeController extends BaseController {

    public function index() {
        echo __METHOD__;
    }

    public function show($ho, $ten) {
//        echo $ho."-".$ten;
        $sv = $this->model('SinhVienModel')->getAll();

        $this->view('MasterLayout',[
            'Page' => 'New',
            'sv' => $sv
        ]);
    }
}
