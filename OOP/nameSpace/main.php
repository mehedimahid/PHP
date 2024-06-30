<?php
include "../autoLoading/planet/mars.php";
include "Planets/Planet.php";
include "Planets/Earth.php";
include "Planets/Mars.php";

//$planet = new Planet();//Fatal error Class "Planet" not found in D:\PHP\PHP\OOP\nameSpace\main.php:
//$planet = new Astronomy\Planet();//unqualified
// //main.php namespace মধ্যে না থাকলে রেজাল্ট আসবে তবে namespace মধ্যে থাকলে আসবে না
//namespace এক প্রকারের ফোল্ডার একে ফোল্ডারের মত করে ব্যাবহার করতে হয়
        //or
use Astronomy\Planets\Earth;
use Astronomy\Planets\Mars;

//$planet1 = new \Astronomy\Planets\Earth();//qualified
$planet1 = new Earth();//qualified

//$planet2 = new \Astronomy\planets\Mars();//qualified
$planet2 = new Mars();//qualified

$planet1->getName();
$planet2->getName();



//namespace মধ্যে php builtin function use করতে চাইলে প্রথমে (\) চিনহ ব্যাবহার করতে হবে
//new DateTime();//error asbe
//new \DateTime();//error asbe na
