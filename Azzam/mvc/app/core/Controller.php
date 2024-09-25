<?php
class Controller {
    public function view($view, $data = []) 
    {
        require_once "../app/view/" . $view . ".php";
    }

    public function model($model) 
    {
        require_once "../app/model/" . $model . ".php";
        return new $model;
    }
}

?>