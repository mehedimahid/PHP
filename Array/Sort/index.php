<?php
$fruits = ["apple", 'mango', 'pineapple', 'banana','tamrind', 'orange' ];
sort($fruits);
// print_r($fruits);
rsort($fruits);
print_r($fruits);

$name = array(
  'a'=>'Jasim',
  'b'=>'Ashik',
  'c'=>'Rahim',
  'd'=>'Karim'
);
sort($name);
// print_r($name);

$animals = ['Tiger','dog', 'cat', 'Elefant','rat','Cow', 'Goat'];
//capital& small letter হওয়ায় আশানুরূপ sort হবে না
sort($animals);
// print_r($animals);
sort($animals , SORT_STRING | SORT_FLAG_CASE);
// print_r($animals);

$numbers = [1,5,3,8,7,4,9];
sort($numbers);
print_r($numbers);