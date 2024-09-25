<?php
class About extends Controller{
    public function index($nama = 'Khodhir', $pekerjaan = 'Santri', $umur = 23)
    {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
}
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page',$data);
        $this->view('templates/footer');
    }
    
}