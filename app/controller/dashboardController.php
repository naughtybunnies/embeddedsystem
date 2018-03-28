<?php
    require '../app/model/dashboardModel.php';

    class dashboardController extends Controller{
        public static function get($param){
            if (!isset($param[0])) {
                $title = "SmartFinger | Dashboard";
                require_once('../app/template/head.phtml');
                require_once('../app/view/dashboard/body.phtml');
            }else{
                require '../app/class/Microgear.php';
                $appkey = "dNh5EsTkW8QWYPJ";
                $appsecret = "sy43FWmqFUamPK3jQe5BZmXG4";

                $mygear = new Microgear($appkey, $appsecret);
                $function_name =$param[0];
                $result = $mygear->$function_name();

                header("Location:/dashboard");
            }

        }

        public static function post($param){
            require '../app/class/Microgear.php';
            $mygear = new Microgear("dNh5EsTkW8QWYPJ", "sy43FWmqFUamPK3jQe5BZmXG4");
            if ($param[0] == "on") {
                echo $param[0];
            }else{
                echo $param[0];
            }
            header("Location: /dashboard");
        }

    }
 ?>
