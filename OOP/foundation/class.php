<?php
class Human{
  public $name;
  function sayHi(){
    echo"Hello ";
    $this->name() ;
  }
  function name(){
    echo $this->name."\n";
  }
}

$h1= new Human();
$h1->name = 'Hasan';
$h1->sayHi();

$h2 = new Human();
$h2->name = 'Mehedi';
$h2->sayHi();
