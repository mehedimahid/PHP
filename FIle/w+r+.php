<?php
$fileName = "./txt3.txt";
$fileOpen = fopen($fileName,"r+");
$line =fgets($fileOpen);
echo $line;

fwrite($fileOpen,"Mars\n");
fwrite($fileOpen,"Jupiter\n");
fwrite($fileOpen,"Saturn\n");
fwrite($fileOpen,"Uranus\n");
echo $line;
$line =fgets($fileOpen);
echo $line;$line =fgets($fileOpen);
echo $line;$line =fgets($fileOpen);
echo $line;