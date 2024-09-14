<?php

class About extends Controller{
   public function index($nama= 'Dzikri', $pelajar= 'Programmer', $umur = 21)
   {
        $data['nama'] = $nama;
        $data['pelajar'] = $pelajar; 
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
   }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}