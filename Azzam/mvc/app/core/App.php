<?php
class App { //membuat property untuk menentukan default nya
    protected $controller = "Home";
    protected $method = "index";
    protected $parameters = [];

    public function __construct() 
    {
        $url = $this->parseURL();

        //controller
        if( isset($url[0]) && file_exists("../app/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }
         
        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //method
        if( isset($url[1]) ) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //parameter
        if( !empty($url) ) {
            $this->parameters = array_values($url);
        }

        //jalankan controller dan method,serta kirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->parameters);
       
    }

    public function parseURL() 
    {
        if( isset($_GET["url"]) ) {
            $url = rtrim( $_GET["url"], "/"); //menghapus tanda / di akhir
            $url = filter_var($url, FILTER_SANITIZE_URL); //untuk membersihkan url dari karakter2 aneh
            $url = explode("/", $url); //memecah url berdasarkan tanda /
            return $url;
        }
    }

}

?>