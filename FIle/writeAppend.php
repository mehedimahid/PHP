<?php
$filename = "./text2.txt";
$fileOpen = fopen($filename,"w");//mode:w হলে আগের ডাটা গুলা সব মুছে নিউ ডাটা লিখবে
fwrite($fileOpen,"Mercury\n");
fwrite($fileOpen,"Venus\n");
fwrite($fileOpen,"Earth\n");
