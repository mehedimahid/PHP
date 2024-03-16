<?php
$st = microtime(true);
factorial(100);
$et =microtime(true);
$dift= $et - $st;
printf("%10.8f", $dift);
function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}