<?php
class Myclass{
  const city = "Rangpur";
  function MyFunc(){
    echo "My city name is ".self::city ."\n";
    echo "My city name is ".$this::city ."\n";
  }
}
$m = new Myclass();
$m->MyFunc();