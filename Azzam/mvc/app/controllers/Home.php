<?php

class Home extends Controller {
    public function index()
    {
        $data["judul"] = "Home";
        $data["nama"] = $this->model("User_model")->Getuser();
        $this->view("template/header", $data);
        $this->view("home/index", $data);
        $this->view("template/footer");
    }
}
?>