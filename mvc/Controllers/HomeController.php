<?php

class HomeController extends BaseController {

    public function index() {
        $this->view('MasterLayout');
    }

    public function index2() {
        $this->view('SecondLayout');
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
