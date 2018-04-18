<?php

    class abcController extends Controller{
        public static function get($param){
            echo "string";
            require_once('../app/template/head.phtml');
            require_once('../app/view/abc/body.phtml');
        }

        public static function post($param){

        }

    }
 ?>
