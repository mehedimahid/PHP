<?php
interface BaseAnimal{
  function eat($p1,$p2);
  function alive();
  function breed();

}
class Animal implements BaseAnimal{
  function eat($p1,$p2){}
  function alive(){}
  function breed(){}
}

interface BaseHuman extends BaseAnimal{
  function talk();
}

// class Human implements BaseHuman{
//   function eat($p1, $p2)
// {}
// function alive()
// {}
// function breed()
// {}
//   function talk(){}
// }
// $h = new Human();
// echo $h instanceof BaseHuman;
// echo $h instanceof BaseAnimal;
//Human akoi sate BaseHuman &baseAnimal  interface ke represent korte pare take polimorphism bole

abstract class AbstractHuman implements BaseAnimal{
  abstract function run();
}
class Human extends AbstractHuman
{
    public function eat($p1, $p2)
    {}
    public function alive()
    {}
    public function breed()
    {}
    public function talk()
    {}
    function run(){ }
}
$h = new Human();