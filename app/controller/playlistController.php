<?php
  require '../app/model/homeModel.php';
  class playlistController extends Controller{
      public static function get($param){
        $title = "Huggy | Playlist";
        require_once('../app/template/head.phtml');
        require_once('../app/view/playlist/body.phtml');
        require_once('../app/template/foot.phtml');

      }

      public static function post($param){

      }

  }
 ?>
