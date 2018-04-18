<?php

    class Application{
        private $method = null;
        private $controller = null;
        private $param = array();

        public function __construct(){
            session_start();
            // parse url
            $this->urlParse();
            // call controller parent
            require_once '../app/class/Controller.php';
            require_once '../app/class/Model.php';

            if (file_exists('../app/controller/'.$this->controller.'Controller.php')) {
                // call the correct controller
                require_once '../app/controller/'.$this->controller.'Controller.php';
                $controllername = $this->controller.'Controller';
                $controllerfunction = $this->method;
                $controller = $controllername::$controllerfunction($this->param);
            } else {
                require_once '../app/controller/entercodeController.php';
                $controller = entercodeController::get($this->controller);
            }
        }

        private function urlParse(){
            if(!isset($_GET['url'])){
                $url = "entercode";
                $this->method = $_SERVER['REQUEST_METHOD'];
                $this->controller = $url[0];
                $this->param = array();
            }else{
                $url = explode("/",$_GET['url']);
                $this->method = $_SERVER['REQUEST_METHOD'];
                $this->controller = $url[0];
                $this->param = array_slice($url,1);
            }
        }

    }
 ?>
