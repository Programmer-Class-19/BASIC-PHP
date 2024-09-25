<?php

class Controller {
    protected $model;


    public function __construct($model) {
        $this->model = $model;
    }

    public function render($view, $data = []) {
        extract($data);
        include "$view.php";
    }
    }