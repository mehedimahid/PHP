<?php

////3.4 array to string & string to array

$vegetables = 'Tomato , Potato, Carrot, bringal, Letus';
//string to array korte explode(separator, string) method bebohar korte hoy
$vegetableArray = explode(', ', $vegetables);
// var_dump($vegetableArray);
// echo count($vegetableArray);

//array to string

$vegetableString = join(', ', $vegetableArray);
// echo $vegetableString;
//  // 3.5 মাল্টিডাইমেনশনাল বা নেস্টেড অ্যারে

$simple = [
  "test" =>[
      "testAgain" =>[
        "a",
        "b",
        "c",
        "d"
      ]
  ]
];

echo $simple["test"]["testAgain"][2];//output "c"
echo "\n";
$simple2 = [
  [1,2,3,],
  [11,22,33],
  [111,222,333],
  [1111,2222,[4,5,6]]
];

// var_dump($simple2);

echo $simple2[3][2][1];//output 5