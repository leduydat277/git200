<?php
class App {
    protected $controller = 'home';
    protected $action = 'say_hi';
    protected $params  = [];
    function __construct(){
        $arr = $this->Url();
        // Xử lý controllers
        if(file_exists('./mvc/controllers/' . $arr[0] . '.php')){
            $this -> controller = $arr[0];
            unset($arr[0]);
        }
        require_once './mvc/controllers/' . $this -> controller . '.php';
        $this->controller = new $this->controller;

        // xử lý action
        if(isset($arr[1])){
            if(method_exists($this -> controller,$arr[1])){
                $this -> action = $arr[1];
            }
            unset($arr[1]);
            
        }
        
        // xử lý params 
        $this -> params = $arr?array_values($arr):[];
        call_user_func_array([$this->controller, $this->action], $this->params );
    }
    
    
    function Url(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
        return [];
    }
}