<?php

    function autoload($parametro){
        require __DIR__."/entidad/".$parametro.".php";
    }

    spl_autoload_register('autoload');



    $res = new user('marcos','jhon');
    echo $res->getUser();
    




?>