<?php
$names = [
  "Rahim",
  "Karim",
  123,
  "guest"
];
// $n = count($names);

$names[2] = "Shafik";//replice 123 to shafik;
// $name = array_shift($names);//array ar 1st element ber kore anbe
// echo $name ."\n";//output = Rahim

// $name2 = array_pop($names);//seser element kete anbe
// echo $name2 . "\n";//output Guest 

// $names[] = "salam";//sese new data entry korbe
array_push($names, "salam");//sese new data entry korbe

array_unshift($names, "salma");//prothome new data entry korbe
array_unshift($names, "new person");
for ($i=0; $i < count($names); $i++) { 
  echo $names[$i]."\n";
}
// for ($i = $n-1; $i >=0; $i--) {
//     echo $names[$i] . "\n";
// }
