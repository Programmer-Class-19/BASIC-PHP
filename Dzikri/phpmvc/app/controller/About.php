<?php

class About extends Controller{
   public function index($nama= 'Dzikri', $pelajar= 'Programmer', $umur = 21)
   {
        $data['nama'] = $nama;
        $data['pelajar'] = $pelajar; 
        $data['umur'] = $umur;
        $this->view('tempalates/header');
        $this->view('about/index', $data);
        $this->view('tempalates/footer');
   }
    public function page(){
        $this->view('tempalates/header');
        $this->view('about/page');
        $this->view('tempalates/footer');
    }
}