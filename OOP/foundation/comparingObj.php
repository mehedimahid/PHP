<?php

class Planet
{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}
$p = new Planet("Earth");
$p3 = new Planet("Earth");
$p2 = new Planet("Mars");
$p4 = $p2;
if ($p===$p3){
    echo "Similar Planet";
}else{
    echo "Not Similar Planet";
}