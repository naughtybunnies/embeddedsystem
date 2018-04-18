<?php
  require '../app/model/homeModel.php';
  class ghostController extends Controller{
      public static function get($param){
        require_once('../app/template/head.phtml');
        require_once('../app/view/ghost/body.phtml');
        require_once('../app/template/foot.phtml');

      }

      public static function post($param){

      }

  }
 ?>
