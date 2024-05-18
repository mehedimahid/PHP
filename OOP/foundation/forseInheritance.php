<?php
class Shape{

}
class Shapes{
  private $shapes;
  function __construct(){
    $this->shapes = array();
  }
  function addShapes(Shape $shape){
    ////1st perameter, jara Shape ke extends korbe tader nibe
    array_push($this->shapes, $shape);
  }
  function totalShape(){
    return count($this->shapes);
  }
}

class RectAngel extends Shape{

}
class TriAngel extends Shape{
  
}
class Student{
////it's not a shape because Shape ke extends kore nai tai ati shape noy
}

$shapeCollection = new Shapes();
$shapeCollection->addShapes(new RectAngel);
$shapeCollection->addShapes(new TriAngel);
// $shapeCollection->addShapes(new Student);//PHP Fatal error:  Uncaught TypeError: Shapes::addShapes(): Argument #1 ($shape) must be of type Shape, Student given,

echo $shapeCollection->totalShape();
