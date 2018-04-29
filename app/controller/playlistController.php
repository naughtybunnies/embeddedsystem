<?php
  require '../app/model/homeModel.php';
  class playlistController extends Controller{
      public static function get($param){
        if (isset($param[0])) {
          if ($param[0]=="lullaby") {
            $title = "Huggy | Lullaby";
            require_once('../app/template/head.phtml');
            require_once('../app/view/playlist/body_lullaby.phtml');
            require_once('../app/template/foot.phtml');
          }
          elseif ($param[0]=="tales") {
            $title = "Huggy | Tales";
            require_once('../app/template/head.phtml');
            require_once('../app/view/playlist/body_tales.phtml');
            require_once('../app/template/foot.phtml');
          }
          else {
            $title = "Huggy | The Shock";
            require_once('../app/template/head.phtml');
            require_once('../app/view/playlist/body_theshock.phtml');
            require_once('../app/template/foot.phtml');
          }
        }else{
          $title = "Huggy | Playlist";
          require_once('../app/template/head.phtml');
          require_once('../app/view/playlist/body.phtml');
          require_once('../app/template/foot.phtml');
        }


      }

      public static function post($param){

      }

  }
 ?>
