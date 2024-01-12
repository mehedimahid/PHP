<?php
$fruits = [
  'a'=>"apple", 
  'b'=>'mango',
  'c'=> 'pineapple',
  'd'=> 'banana'];

$number = [1,22,2,5,7,44,2,3,5];
if(in_array(23, $number)){
  echo"2 is found \n";
}else{
  echo"Not found \n";
}
//array_search return index number
$keyNumber =array_search(22, $number);
echo ($keyNumber) ."\n";

////key search

if(key_exists('bb', $fruits)){
  echo 'key "b" is exist';
}else{
  echo"Not found \n";
}