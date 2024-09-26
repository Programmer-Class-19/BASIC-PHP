<?php 

class About extends Controller{
    public function indext($nama = 'Ardi Juni Yansyah', $pekerjaan = 'Fullstack Developer', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->views('templates/header', $data);
        $this->views('about/indext', $data);
        $this->views('templates/fotter');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->views('templates/header', $data);
        $this->views('about/page');
        $this->views('templates/fotter');
    }

}

?>