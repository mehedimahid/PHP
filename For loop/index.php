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
////tutorial ১.২৬ - ফর লুপে মাল্টিপল স্টেপিং
for ($i=0; $i <100 ; $i++) { 
  // if ($i % 7==0) echo $i ."\n";
  // if ($i % 11==0) echo $i ."\n";
  // echo $i %7 ==0 ? $i . "\n" : '' ;
  // echo $i % 11 == 0 ? $i . "\n" : '';

}//or

for ($i =0, $j = 0; $i < 100; $i+=7, $j+= 11){ 
  //akhane $j ke chack korle $I onek output  asto na
  echo $i ."\n";
  // echo $j . "\n";//100+ output asbe so
  echo $j < 100 ? $j."\n" : '';

}

//কোন নাম্বারের ফ্যাক্টোরিয়াল বের করা 1.24
//5 = 5*4*3*2*1
// $n = 5;
// for ($i=$n, $factorial = 1; $i >0 ; $i--) { 
//  $factorial = $factorial * $i;
// }
// printf("factorial of %d is %d", $n,$factorial);

//1-5 এর ফ্যাক্টোরিয়াল বের করি
// $operation = 1;
// for ($i=1; $i <=10 ; $i++) { 
//   $result = 1;
//   for ($j=$i; $j >1 ; $j--) { 
//     $result *= $j;
//     $operation++;
//  }
//  echo("Factorial of{$i} of {$result} \n");
// }
// echo"total {$operation} number of operation \n";
// //smarltly...

// $result = 1;
// $j = 1;
// for ($i=1; $i <=10 ; $i++) { 
//   $result *= $i;
//   echo ("Factorial of{$i} of {$result} \n");
//   $j++;
// }
// echo "total {$j} number of operation \n";
