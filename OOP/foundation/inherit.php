<?php
class Animal
{
  protected $name;
  function __construct($name){
    $this->name = $name;
  }
    public function eat()
    {
        echo "{$this->name} is eating \n";
    }
    public function run()
    {
        echo "{$this->name} is running\n";
    }
    public function sleep()
    {
        echo "{$this->name} is sleeping\n";
    }
    protected function addTitle($title){
      $this->name = $title . " " . $this->name;
    }
}
class Human extends Animal{
  function sayHi(){
    $this->addTitle("Mr.");
    echo"{$this->name} say hi\n";
  }
}

class Cat extends Animal{
  function greet(){
    echo"{$this->name} say Meow\n";
  }
}

// $man1 = new Human("Rasel");
// // $man1->
// $man1->sayHi();
// $man1->eat();

// $cat1 = new Cat('Tom');
// $cat1-> greet();

class ParentClass{
  protected $name;
  function __construct($name){
    $this->name =$name;
    $this->sayHi();
  }
  function sayHi(){
    echo "Hi from {$this->name}";
  }
}
class ChildClass extends ParentClass{
  function sayHi(){
    parent::sayHi();// same name ar parent property ke call korar niom
    echo"Hello";
  }
}

$cc = new ChildClass("ABCD");