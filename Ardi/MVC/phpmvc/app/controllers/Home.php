<?php

class Home extends Controller {
    public function indext()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->views('templates/header', $data);
        $this->views('home/indext', $data);
        $this->views('templates/fotter');
    }
}