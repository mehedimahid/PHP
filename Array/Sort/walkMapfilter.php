<?php
$number = [1, 2 ,3, 4 ,5, 6, 7, 8, ];
function squire($n){
  printf("squire of %d is %d \n", $n, $n*$n);
}
// array_walk($number, 'squire');

function cube($n){
  // return $n*$n*$n;
  return $n%2 ==0;
}
//array_walk kono value return kore na ata sudu konoi value print/echo korar jonno use kora hoy
// $newArray = array_walk($number, 'squire');
//kno value return korte chaile array_map use korte hbe
$newArray = array_map("cube", $number);
// print_r($newArray);

function even($n){
    return $n % 2 == 0;
}
$evenArray = array_filter($number, 'even');
// print_r($evenArray);

//    //s দিয়ে শুরু শব্দ খুজে বের করা।
$name = ['sujon','hasan', 'alif', 'sumon','habib', 'samim', 'sahin'];
function nameSearch($name){
  return $name[0] =='s';
}
$newName = array_filter($name, 'nameSearch');
print_r($newName);