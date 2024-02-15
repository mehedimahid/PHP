<?php
$fileName = "./students.txt";
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
// //file a data entry:

//  //example :1
//$fileOpen = fopen($fileName,"w");
//foreach($students as $student){
//    $data = sprintf("%s, %s ,%s, %s, %s \n",$student["fname"],$student["lname"],$student["age"],$student["class"],$student["roll"]);
//    fwrite($fileOpen,$data);
//}


/*
//  //example :2

$fileOpen = fopen($fileName,"w");
foreach($students as $student){
    fputcsv($fileOpen, $student);
}
*/


// //file theke data neya
//  //example :1

/*
$fileOpen = fopen($fileName, "r");
while($data = fgets($fileOpen)){
    $student = explode(',', $data);
    printf("Name: %s %s\nAge: %s\nClass: %s\nRoll: %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4]);
}
*/

//  //example :2
/*
$fileOpen = fopen($fileName, "r");
while($student = fgetcsv($fileOpen)){
    printf("Name: %s %s\nAge: %s\nClass: %s\nRoll: %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4]);
}*/
/*
 * NOTE:
 csv = comma separeted value
 * fputcsv() comma separeted value write korte use kora hoy and
 * fgetcsv() value read korte use hoy & explode() use korte hoy na
 *
 * */

//      //new data add
/*
$students = [
    "fname" => "Mehedi",
    "lname" => "Miraz",
    "age" => 13,
    "class" =>7,
    "roll"=>03
];
$fileOpen = fopen($fileName,"a");
fputcsv($fileOpen,$students);
*/

$data = file($fileName);
print_r($data);
unset($data[0]);

$fileOpen = fopen($fileName,"w");
foreach ($data as $line){
    fwrite($fileOpen, $line);
}


