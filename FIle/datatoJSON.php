<?php
$fileName = "./JSONdata.txt";
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

//$jsonData =json_encode($students);
//file_put_contents($fileName,$jsonData);
$data = file_get_contents($fileName);
$allStudent = json_decode($data,true);
print_r($allStudent);
echo $allStudent[0]["fname"];