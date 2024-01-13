<?php
$number1 = [1,05,3,4,55,2,41,9];
$number2 = [2,5,30,24,1,7,9,33];
$common = array_intersect($number1, $number2);//matching number gulo return korbe
$diff = array_diff($number1, $number2);//sudu 1st array ar different number gulo return korbe

// print_r($common);
// print_r($diff);

$fruits1 = [
    'a' => "apple",
    'b' => 'mango',
    'c' => 'pineapple',
    'f' => 'banana'
  ];

$fruits2 = [
  'd'=>'orange',
  'e'=>'bringal',
  'g'=>'banana'
];
$commonFruits = array_intersect($fruits1,$fruits2);//1st array ar key soho match value return korbe
print_r($commonFruits);

$commonFruitsWithKey = array_intersect_assoc($fruits1,$fruits2);
print_r($commonFruitsWithKey);//key na match hoyay kono value return korbe na
$difFruits = array_diff($fruits1,$fruits2);
print_r($difFruits);//sudu 1st array ar value return korbe
