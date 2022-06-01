<?php

// BaseController: require Db $ View, OtherControllers extends BaseController

class BaseController {
    
    // call model, return model instance
    public function model($model) {
        require_once './mvc/Models/'.$model.'.php';
        return new $model;
    }
    
    // call view
    public function view($view, $data = []){
        require_once './mvc/Views/'.$view.'.php';
    }
}