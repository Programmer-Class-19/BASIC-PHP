<?php

class TodoController {
    public function index() {
        $data = Todo::getAllTodos();
        Page::render('list_todos', [
            'todos' => $data,
        ]);
    }
}