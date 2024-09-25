<?php
class App {
    protected $controller = 'ExamController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        global $pdo; // Ambil koneksi dari config
        $url = $this->parseURL();
        
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller($pdo); // Pass PDO ke controller

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL() {
        return explode('/', trim($_GET['url'] ?? '', '/'));
    }    
}
