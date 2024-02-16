<?php
$fileName = "./student2.txt";
$students =[
    [
        "fname" => "Mehedi",
        "lname" => "Hasan",
        "age" => 17,
        "class" =>10,
        "roll"=>05
    ],
    [
        "fname" => "Sakib AL",
        "lname" => "Hasan",
        "age" => 16,
        "class" =>9,
        "roll"=>01
    ],
    [
        "fname" => "Tamim",
        "lname" => "Iqbal",
        "age" => 20,
        "class" =>12,
        "roll"=>10
    ]
];
$student = [
    "fname" => "Mehedi",
    "lname" => "Miraz",
    "age" => 13,
    "class" =>7,
    "roll"=>03
];


//$data =serialize($students);
//file_put_contents($fileName,$data);

/*Note:
*/



$dataFromFile = file_get_contents($fileName);
$allStudents =unserialize($dataFromFile);

print_r($allStudents);

//      //Data Delete
//unset($allStudents[0]);
//$data =serialize($allStudents);
//file_put_contents($fileName,$data, LOCK_EX);

//      //Data Push
//array_push($allStudents, $student);
//$data =serialize($allStudents);
//file_put_contents($fileName,$data, LOCK_EX);