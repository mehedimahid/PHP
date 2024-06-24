<?php
Class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }
    function setColor($color){
        $this->color = $color;
    }
    function __toString(){
        //obj ke string a rupantor kore;
        return "This color is {$this->color}";
    }
}
$fc = new Color("red");
echo $fc;