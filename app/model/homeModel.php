<?php
    class homeModel extends Model{
        public static function testDB(){
            $db = Model::getDB();
            $q = "SELECT * FROM user";
            $stmt = $db->query($q);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

    }
 ?>
