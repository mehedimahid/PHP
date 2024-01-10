<?php
//   //৩.১০ - মূল অ্যারে ঠিক রেখে অ্যারে থেকে কিছু ডেটা এক্সট্রাক্ট করা

$fruits = ['banana', 'orange', 'pineapple', 'mango', 'jackfruit', 'apple'];
$someFruit = array_slice($fruits, 2);
$someFruit2 = array_slice($fruits, 2, 2, true);
// $someFruit3 = array_slice($fruits, 2, -1);
// $someFruit4 = array_slice($fruits, -5 );
// $someFruit5 = array_slice($fruits, -5, -2);

// print_r ($someFruit);
// print_r($fruits);//no change
// echo "\n";
// print_r($someFruit2);
echo "\n";
// print_r($someFruit3);
// echo "\n";
// print_r($someFruit4);
// echo "\n";
// print_r($someFruit5);
// echo "\n";

$randomDatas = [
  "a"=>12,
  'b'=>45,
  'c'=>32,
  'd'=> 40,
  12=> 12,
  'e'=> 25
];

// $random = array_slice($randomDatas, 3, null, true);
$random = array_slice($randomDatas, 3, null);
print_r($random);