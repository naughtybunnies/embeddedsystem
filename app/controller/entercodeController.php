<?php
  require '../app/model/homeModel.php';
  class entercodeController extends Controller{
      public static function get($param){
        $title = "Huggy | Login";
        require_once('../app/template/head.phtml');
        require_once('../app/view/entercode/body.phtml');
        require_once('../app/template/foot.phtml');

      }

      public static function post($param){

      }

  }
 ?>
