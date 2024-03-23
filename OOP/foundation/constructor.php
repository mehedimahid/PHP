<?php
class Human{
    public $name;
    public $age;
    function __construct($pName, $age = 0){
    $this->name = $pName;
    $this->age = $age;

    echo "New Human object is creat for {$this->name}\n";
}

    function sayHi(){
        echo "Hello\n";
        $this->name();
    }
    function name(){
        if($this->age){
            echo "My name is"." ". $this->name .", i am {$this->age} years old" ."\n";
        }else{
            echo "My name is" . " " . $this->name . ", i don't know how old i am." . "\n";

        }
    }
}
$h1 = new Human("Mehedi",23);
$h2 = new Human("Hasan");

$h1->sayHi();
$h2->sayHi();

