<?php
$name = "Mehedi Hasan 01234567891 azxsd@gmail.com";
$parts = sscanf($name, "%s %s %11s %s");
//print_r($parts);

$parts2 = sscanf($name, "%s %s %11s %s", $fname,$lname, $mobile, $email);
echo $fname;