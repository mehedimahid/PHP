<?php
$n = 1;
$result = (10 == $n) ? "ten" :( (12 == $n) ? "twelve": "we do not know this number \n");
echo $result;
?>
<?php
$color = "black";
switch($color){
  // case("red"):
  //   echo"this color is red";
  //   break;
  // case("green"):
  //   echo"this color is green";
  //   break;
  case("red"):
  case("black"):
    echo ucwords($color). " is my favorite color";
    break;
  case("blue"):
    echo"blue is not my favorite color";
    break;
  default:
    echo"this color is ok";
}
echo"\n";
$n = 18;
$r = $n % 2;
switch ($r) {
  case 0:
    switch ($n) {
      case $n > 0:
        echo"$n is a positive even number \n";
        break;
      case $n < 0:
        echo"$n is a negative even number \n";
        break;
    }
    break;
  default:
   switch ($n) {
      case $n > 0:
          echo "$n is a positive odd number \n";
          break;
      case $n < 0:
          echo "$n is a negative odd number \n";
          break;
    }
};

switch(true){
  case(0==$r && $n> 0):
   echo "$n is a positive even number \n";
  break;
  case(1==$r && $n> 0):
   echo "$n is a positive odd number \n";
  break;
   case(0==$r && $n< 0):
   echo "$n is a negative even number \n";
  break;
   case(-1==$r && $n< 0):
   echo "$n is a negative odd number \n";
  break;
}