<?php
$filename = "./text.txt";
$fileOpen = fopen($filename,"r");
//$line = fgets($fileOpen);
//echo $line;
while($line = fgets($fileOpen)){
//    echo $line;
}

rewind($fileOpen);

while($line = fgets($fileOpen, 5)){
//    echo $line."-";
}
fclose($fileOpen);

$allData = file($filename);
print_r($allData);
echo ($allData[3]);
$getAllData = file_get_contents($filename);
echo $getAllData;