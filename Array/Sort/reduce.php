<?php
$numbers = [1,2,3, 4, 5, 6, ];
function sum($oldValue = 0, $newValue){
  return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum');
echo ($sum);