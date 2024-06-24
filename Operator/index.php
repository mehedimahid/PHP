<?php
////১.২৯ - লুপ দিয়ে ফিবোনাচ্চি সিরিজ প্রিন্ট করা
//// $veryOld = 0;
//// $old = 1;
//// $new = 1;
//// for($i = 0; $i<10; $i++){
////   echo $veryOld . " " ;
////   $old = $new;
////   $new = $old + $veryOld;
////   $veryOld = $old;
//// }
//
////১.৩০ - স্পেসশিপ অপারেটর(<=>)
//
//$x = 7;
//$y = 77;
//function greaterOrSmaller($x, $y){
//  if($x>$y ){
//    return 1;
//  }elseif ($x == $y) {
//    return 0;
//  }else {
//    return -1;
//  }
//}
//
//if (greaterOrSmaller($x, $y) ==1) {
//  echo "{$x} is greater then {$y}";
//} else if(greaterOrSmaller($x, $y) == 0) {
//  echo "{$x} is equal to {$y}";
//}else if(greaterOrSmaller($x, $y) == -1){
//  echo "{$x} is smaller then {$y}";
//}
////<=>
///*
//x<=>y x>y return 1
//x<=>y x=y return 0
//x<=>y x<y return -1
//*/
//echo "\n=========\n";
//// $resul = $x <=>$y;
//// if ($resul == 1) {
////     echo "{$x} is greater then {$y}";
//// } else if ($resul == 0) {
////     echo "{$x} is equal to {$y}";
//// } else if ($resul == -1) {
////     echo "{$x} is smaller then {$y}";
//// }
//
////// ১.৩১ - নাল কোলেস অপারেটর(??)
//
//$default_lan = 10.4;
//$default_lon = 21.4;
//// $user_lan = 23.4;
////$user_lan;
//
//
//
//$lan = isset($user_lan) ? $user_lan : $default_lan ;
//echo $lan;
//
//$lan  = $user_lan ?? $default_lan;
//echo $lan;

$aaa = [
    10,
    'sadasd',
    12,
    ['oieouweiu', '14', 15],
    'djhfjdshfjdf',
    17
];

function intege($value) {
    $bb = [];

    if (is_array($value)) {
        foreach ($value as $val) {
            // Recursively flatten nested arrays
            $bb = array_merge($bb, intege($val));
        }
    } else {
        if( is_numeric($value) ) {
            $bb[] = $value; // Add non-array values directly
        }
    }

    return $bb;
}

// Flatten the array $aaa using intege() function
$result = intege($aaa);

// Output the flattened array
print_r($result);

