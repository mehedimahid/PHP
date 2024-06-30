<?php
require_once "vendor/autoload.php";

use Astronomy\Planets\Earth;
use Astronomy\Planets\Mars;
use Astronomy\Planets\Pluto;


$planet1 = new Earth();//qualified

$planet2 = new Mars();//qualified
$Pluto = new Pluto();

$Pluto->getName();
$planet1->getName();
$planet2->getName();




