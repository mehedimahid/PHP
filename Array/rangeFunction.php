<?php
//range function use kore sohoje akti array banano jay
//1 - 15 ar akti array banano
$numbers = range(1,15);
// print_r($numbers);

$evenNumber = range(0,20, 2);
$oddNumber = range(1,15,2);

// print_r($evenNumber);

// 1 থেকে ৫০ এর মধ্যে যে সকল সংখ্যা ১১ দিয়ে ভাগ যায়
foreach(range(0, 50, 11) as $divBy11){
  if($divBy11>0){
    echo $divBy11 . "\n";
  }
}