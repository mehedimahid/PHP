<?php
//ফর লুপে মাল্টিপল স্টেপিং

// for($i=10;$i>0; $i--){
//   echo $i . ":" .(10-$i);
//   echo PHP_EOL;
// }

// for ($i=10, $j = 0; $i >0 ; $i--, $j++) { 
//   echo $i .":". $j;
//   echo PHP_EOL;
// }

//কোন নাম্বারের ফ্যাক্টোরিয়াল বের করা
//5 = 5*4*3*2*1
$n = 5;
for ($i=$n, $factorial = 1; $i >0 ; $i--) { 
 $factorial = $factorial * $i;
}
printf("factorial of %d is %d", $n,$factorial);