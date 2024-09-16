<?php
class About extends Controller {
    public function index($nama = "Haqqi", $umur = 20, $job = "Student")
    {
        $data["nama"] = $nama;
        $data["umur"] = $umur;
        $data["job"] = $job;
        $data["judul"] = "About Me";
        $this->view("template/header", $data);
        $this->view("About/index", $data);
        $this->view("template/footer");
    }
    public function page()
    {
        $data["judul"] = "Pages";
        $this->view("template/header", $data);
        $this->view("About/page");
        $this->view("template/footer");
    }
}
?>