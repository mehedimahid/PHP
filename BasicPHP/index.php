<?php
  $fname = "Isaac";
  $lname = "Newton";
 
  /*
  echo(" His name is {$fname} {$lname} \n");
  var_dump($fname , $lname);
  printf("His %sname is %s %s \n", "full",strtoupper($fname), $lname);
  echo"My 
  name
  is
  Mehedi
  Hasan ";
  */
$planet1 = "Marcury";
$planet2 = "Jupiter";
echo("The smallest planet is ".$planet1." and the biggest planet is ". $planet2."\n" );
echo("The smallest planet is {$planet1} and the biggest planet is $planet2\n" );
printf("The smallest planet is %s and the biggest planet is %s \n",strtoupper($planet1), strtoupper($planet2) )

?>