<?php
// // ৩.৩ - অ্যাসোসিয়েটিভ অ্যারে[key => value]
$foods =[
  "Vegetables" => "Tomato , Potato, Carrot ",
  "Frouts" => "Apple, Mango, Orange, Grape",
  "Drinks" => "Water, Milk",
];
// $foods["Drinks"] = $foods["Drinks"]. " , Orange juice";// "Drink a value hisabe Orange juice add hobe"
$foods["Drinks"] .= " , Orange juice"; //simple way to add value

echo count($foods);
// echo $foods[0];// warning asbe key value peyer হওয়ায় ইনডেক্স  দিয়ে রেজাল্ট  আসবে না 
echo $foods["Drinks"]. "\n";
foreach ($foods as $key => $value) {
//  echo $foods[$key] . "\n";
echo $key. "=>". $value . "\n";
}