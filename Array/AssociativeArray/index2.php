<?php
//    //৩.৬ - অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন

$student = array(
  'fname' => 'Jamal',
  'lname' => 'Ahmed',
  'age' => 15,
  'class' => 8,
  'section' => 'b'
);
printf('%s %s', $student['fname'], $student['lname']);
echo  "\n";
// //Array to string

$serialize = serialize($student);
// echo $serialize;
$unserializeToArray = unserialize($serialize);
print_r( $unserializeToArray);

//Json

$jsonencoded = json_encode($student);
echo $jsonencoded;
echo "\n";

$jsontoArray = json_decode($jsonencoded, true);
print_r($jsontoArray);

// //৩.৮ - অ্যাসোসিয়েটিভ অ্যারে থেকে ডেটা রিমুভ করা

$fullname = array('fname' => 'hello', 'lname' => 'world');

print_r($fullname);

unset($fullname['lname']);
print_r($fullname);