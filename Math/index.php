<?php
  $number1 = 10;
  $number2 = 20;
  $number3 = $number1++;
  /* 
  $number3 = $number1;
  $number1 = $number1 + 1
  */
  $number4 = ++$number2;
  /* $number2 = $number2 + 1 
  $number4 =$number2
  */
  echo $number1,"\n", $number3, "\n";
  echo $number4,"\n", $number2
?>