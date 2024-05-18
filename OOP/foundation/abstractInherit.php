<?php
abstract class Shape{
  abstract function getArea();
  abstract function getPerimeter();
}

class ReactAngel extends Shape{
  private $base, $height;
  function __construct($base,$height){
    $this->base = $base;
    $this->height = $height;
  }
  function setBase($base){
    $this->base = $base;
  }
  function setHeight($height){
    $this->height = $height;
  }
  function getPerimeter(){
    $pm = 2* ($this->base + $this->height);
    echo $pm;
  }
  function getArea(){
    $area= $this->base*$this->height;
    echo $area;
  }
}
$r = new ReactAngel(2,4);
$r->getArea();
$r->getPerimeter();

//final method

abstract class MyClass{
  final function doSomething(){
    echo "Do someThing";
  }
}

class NewClass extends MyClass{
//   function doSomething() // //PHP Fatal error:  Cannot override final method MyClass::doSomething()
// {
//     echo "Do someThing";
// }

}

$mc = new NewClass();