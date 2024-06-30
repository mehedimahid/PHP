<?php
function myAutoload($class){
    if(strpos($class, "Planet_") !== false){
        $fileName = str_replace("Planet_", "", $class);

        include strtolower("planet/".$fileName) . ".php";
    }else {
        include strtolower($class . '.php');
    }
}
spl_autoload_register('myAutoload');
(new Bike)->getType();
(new SpaceShip())->launch();
(new Planet_Mars())->getName();
