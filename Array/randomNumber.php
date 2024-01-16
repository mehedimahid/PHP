<?php
$number = range(5, 25);
//// random nmber bananor jonno mt_rand use kora hoy
$ranIndex = mt_rand(0, 20);
// print_r($number[$ranIndex]);

//shuffle kono array ar value gulo ke random li sajay & mul array keo change kore
shuffle($number);
// print_r($number);
// echo($number[15]);

$fruits = [
    'a' => "apple",
    'b' => 'mango',
    'c' => 'pineapple',
    'd' => 'banana'
  ];
// //kono assosiative array ke shuffle korle key gulo harihe jabe /data lost hbe
// //temporary array toiri korte hbe
$_fruits = $fruits;
shuffle($_fruits);
print_r($_fruits);
// shuffle($fruits);
// print_r($fruits);
$key = array_rand($fruits);
// echo($key);
// print_r($fruits[$key]);
