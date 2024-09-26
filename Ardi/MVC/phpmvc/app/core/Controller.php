<?php

class Controller {
    public function views($views, $data = [])
    {
        require_once '../app/views/' . $views . '.php';
    }  

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;   
    }
}