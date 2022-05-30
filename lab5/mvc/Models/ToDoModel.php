<?php

class ToDoModel extends DB {
    public function getAll() {
        return $this->query('SELECT * FROM todos');
    }
    
    public function addTodo($todo) {
        return $this->query("INSERT INTO todos (name)"." VALUES ('".$todo."')");
    }
        
}
//"INSERT INTO wishes (wisher_id, description)" .
//                    " VALUES (" . $wisherID . ", '" . $description . "')"