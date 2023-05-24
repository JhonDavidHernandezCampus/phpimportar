<?php
    class user{
        function __construct(){

        }

        public function saludar(){
        return __CLASS__."estamos saludando desde user";
        }

        static public function getUser():string{
            return "user";
        }
    }




/*     function getuser():string{
        return "esto es de user";
    } */

/* 
    require "info.php";
    echo "user";
 */

?>