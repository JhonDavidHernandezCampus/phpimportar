<?php

    function autoload($parametro){
        require __DIR__."/entidad/".$parametro.".php";
    }

    spl_autoload_register('autoload');
    echo info::getInfo();
    // echo __DIR__."<br>"; 
    // echo $obj->saludar();
/*     include_once "entidad/user.php";
    echo "hola mundo<br>";

    echo __DIR__;
     */
?>