<?php
  require "../app/class/Microgear.php";

  class apiController extends Controller{
      public static function get($param){
        $url = "http://35.197.128.63/mp3/".$param[0];
        $mygear = new Microgear("q8zDPIDchqxRSwk", "Ug33YdGnjH46YUjKcY27bBWbW");
        // echo $mygear->getURL();
        $mygear->play($url);
        header("Location: /");
      }

      public static function post($param){

      }

  }
 ?>
