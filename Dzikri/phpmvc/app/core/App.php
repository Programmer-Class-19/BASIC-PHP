<?php

class App {
    protected $controller = 'Home';
    protected $method ='index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->paseURL();

        // ini controller
        if (isset($url[0]) && file_exists('../app/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        

        require_once '../app/controller/'. $this->controller. '.php';
        $this->controller = new $this->controller;

        // method
        if( isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
        }




    }

    // params
    if(!empty($url)) {
       $this->params = array_values($url);
    }

    // jalankan controller & method serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params );

}

    public function paseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}