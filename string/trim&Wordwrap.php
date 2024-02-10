<?php
$txt =trim( "   Hello world   ");
echo $txt;

//$str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.";
//$str = wordwrap($str, 25);
//echo  $str;
//$str2 = "Lorem Ipsum is simplyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy dummy text of the printing and typesetting industry.";
//$str2 = wordwrap($str2, 25);

//$str2 = wordwrap($str2, 25,"\n",true);
//echo $str2;

$str = "Lorem Ipsum is simply dummy text \nof the printing and typesetting industry. \nLorem Ipsum has been the industry's \nstandard dummy text ever since the 1500s.";
//browser \n ke support kore na <br> ke suport kore tai \n ke <br> a rupantor korte nl2br() use kora hoy
//echo $str;
echo nl2br( $str);
