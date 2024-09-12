<?php 
    class Controller { //ini adalah kelas utama yang mengatur semua kontroller
        public function view($view, $data = []) {
            require_once '../app/views/' . $view . '.php';
        }
    }
?>