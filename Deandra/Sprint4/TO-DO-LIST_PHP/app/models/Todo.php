<?php

class Todo {
    public $id;
    public $user_id;
    public $todo;
    public $status;

    public function __construct($id, $todo, $status = false, $user_id = null) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->todo = $todo;
        $this->status = $status;
    }

    public static function getAllTodos() {
        $results = Database::getConnection()->query('SELECT * FROM lists')
            ->fetch_all(MYSQLI_ASSOC);
        $todos = [];
        foreach ($results as $result) {
            $todo = new Todo($result['id'], $result['todo'], $result['status'], $result['user_id']);
            array_push($todos, $todo);
        }
        return $todos;
    }
}