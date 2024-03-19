<?php
$d1 = new DateTime('12 May 2010');
$d2 = new DateTime('15 june 2015');
// $difference = date_diff($d1,$d2);
$difference = $d1 -> diff($d2);

echo $difference -> format('%y years %m Months %d Days');

