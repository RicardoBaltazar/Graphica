<?php

    class Postagem {
        public static function selecionaTodos() {
            
            $connect = new PDO('mysql: host=localhost; dbname=site_php_mvc', 'root', '');

            var_dump($connect);
        }
    }

?>