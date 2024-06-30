<?php
spl_autoload_register(function ($className) {
    $path = str_replace("CloudStorage\\", "", $className);
    $path = str_replace("\\", "/", $path);
    include_once($path . ".php");
});
