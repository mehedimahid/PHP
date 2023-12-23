<?php
/*
  printf function Part=1.10
  printf function সরাসরি ডাটা print করে দেয় 
 */
$fname = "Sir";
$lname = "Newton";
$mname = "Isaac";

printf("His name is %s %s %s", $fname, $mname, $lname);
echo"\n";
printf('His name is %2$s, %1$s %2$s',$mname, $lname);
echo "\n";
printf('The binary equivalent of %1$d is %1$b', 12);//desimal theke binary
echo "\n";

$m = 12.1234;
printf('%0.2f', $m);//output = 12.12
echo "\n";

printf('%0.3f', $m); //output = 12.123
echo "\n";

$x = 123;
printf('%05d', $x); //output = 00123
echo "\n";

$y = 45.1258;
printf('%08.2f', $y); //output = 00045.13
echo "\n";

?>
<?php
/*
  sprintf function Part = 1.11
  sprintf function ডাটা return করে দেয় 
*/

$fname = "Isaac";
$lname = "Newton";
$output = sprintf("His name is %s %s", $fname , $lname);
echo $output;