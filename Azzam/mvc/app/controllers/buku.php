<?php
class Buku extends Controller 
{
    public function index() 
    {
        $data["judul"]= "Daftar Buku";
        $data["Buku"] = $this->model("Buku_model")->GetalLBook();
        $this->view("template/header", $data);
        $this->view("Buku/index", $data);
        $this->view("template/footer");
    }
}
?>