<?php
// echo mktime(0,0,0,12,12,2000)."\n";
// echo strtotime("12 December 2000")."\n";
// echo time()."\n";// ajker date 
// echo strtotime("now")."\n";// ajker date
// echo strtotime("+3days")."\n";// aj theke 3 din porer date
// echo (strtotime("+3days")-strtotime("now"))/(24*60*60)."\n";//return 3days
// echo (strtotime("+5days") - strtotime("now")) / (24 * 60 * 60)."\n"; //return 5days
echo (strtotime("+2weeks +5days +24hours") - strtotime("now")) / (24 * 60 * 60) . "\n"; //return 20days
//  //more https: //www.php.net/manual/en/function.strtotime
