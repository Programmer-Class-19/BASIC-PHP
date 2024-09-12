<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $param = [];

    public function __construct()
    {
        $url = $this->parseURL();
        if( file_exists('../app/controllers/' . $url[0] . '.php') ){
        $this->controller = $url[0];
    }
}

    public function parseURL(){
        if ( isset($_GET['url']) )
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}