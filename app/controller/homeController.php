<?php
    require '../app/model/homeModel.php';

    class HomeController extends Controller{
        public static function get($param){
            $title = "Huggy | Home";
            require_once('../app/template/head.phtml');
            require_once('../app/view/home/body.phtml');
            require_once('../app/template/foot.phtml');
        }

        public static function post($param){

        }

    }
 ?>
