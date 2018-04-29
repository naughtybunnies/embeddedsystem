<?php
  require '../app/model/homeModel.php';
  class playController extends Controller{
      public static function get($param){
        $title = "Huggy | Play";
        require_once('../app/template/head.phtml');
        require_once('../app/view/play/body.phtml');
        require_once('../app/template/foot.phtml');

      }

      public static function post($param){

      }

  }
 ?>
