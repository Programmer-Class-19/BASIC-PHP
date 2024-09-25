<?php
class Controller {
    public function view($view, $data = []) 
    {
        require_once "../config/views/" . $view . ".php";
    }

    public function model($model) 
    {
        require_once "../config/models/" . $model . ".php";
        return new $model;
    }
}

?>