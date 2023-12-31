<?php
// include_once "function.php";

$x = 0;
// echo "factorial of {$x}  is ". factorial($x);

// //unlimited peramiter

function sum(int ...$number){
  $result = 0;
  for($i = 0; $i< count($number); $i++){
    $result += $number[$i] ;
  }
  return $result;
}

// echo sum(2,3,4) . "\n";
// echo sum(5, 15, 10);
////২.৮ - রিকার্সিভ ফাংশনের সাহায্যে ফিবোনাচ্চি সিরিজ প্রিন্ট করা

function recursive ($old, $new, $end){
  static $start;
  $start = $start ?? 1;
  if($start > $end){
    return;
  }
  $start ++;
  echo $old . " ";
  $_temp = $old + $new;
  $old = $new;
  $new = $_temp;
  recursive($old, $new, $end);
}

// recursive(0,1, 10);
// function doSomething(){
//     $i = $i ?? 0;
//     $i++;
//     echo $i;
//     echo "\n";
// }
// doSomething();
// doSomething();
// doSomething();


// function doSomething(){
//   static $i;
//   $i = $i ?? 0;
//   $i++;
//   echo $i;
//   echo "\n";
// }
// doSomething();
// doSomething();
// doSomething();

function factorial($n){
  if($n <= 1){
    return 1 ;
  }
  return $n * factorial($n - 1);
}
echo factorial(4);