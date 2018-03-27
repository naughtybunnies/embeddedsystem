<?php
    class Model{
        public static function getDB(){
            static $db = null;
            $host = '172.19.0.1';
            $dbname = getenv('MYSQL_DATABASE');
            $user = getenv('MYSQL_USER');
            $password = getenv('MYSQL_PASSWORD');

            if($db == null){
                try{
                    $dsn = 'mysql:host='.$host.';dbname='.$dbname.';charset=utf8';
                    $db = new PDO($dsn, 'lamp', '123456',array(PDO::MYSQL_ATTR_LOCAL_INFILE => true));
                    // Throw an Exception when an error occurs
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e){
                    $PDO_error = $e;
                    echo 'Connection failed: ' . $e->getMessage();
                }
            }
            return $db;
        }
    }

 ?>
