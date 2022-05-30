<?php

class HomeController extends BaseController {
    public function index() {
        $todos = $this->model('ToDoModel')->getAll();
        
        $this->view('MasterLayout', [
            'todos' => $todos
        ]);
    }

   public function create($todo) {
       $this->model('ToDoModel')->addTodo($todo);
   }
       
}
