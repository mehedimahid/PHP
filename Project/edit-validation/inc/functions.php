<?php
define( 'DB_NAME', './data/db.txt' );
function seed() {
    $data           = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11'
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '12'
        ),
        array(
            'id'    => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll'  => '9'
        ),
        array(
            'id'    => 4,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll'  => '8'
        ),
        array(
            'id'    => 5,
            'fname' => 'John',
            'lname' => 'Rozario',
            'roll'  => '7'
        ),
    );
    $serializedData = serialize( $data );
    file_put_contents( DB_NAME, $serializedData, LOCK_EX );
}
function generateReport(){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th width="25%">Action</th>
        </tr>
        <?php
       foreach ($students as $student){
       ?>
           <tr>
               <td><?php printf("%s %s", $student["fname"], $student['lname']);?></td>
               <td><?php printf("%s ", $student["roll"]);?></td>
               <td><?php printf('<a href="../index.php?task=edit&id=%s">Edit</a> | <a href="../index.php?task=delete&id=%s">Delete</a>',$student['id'],$student['id'])?></td>
           </tr>
           <?php

       }?>
    </table>
<?php
}
function addStudents($fname,$lname,$roll){
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $_student){
        if($_student['roll'] == $roll){
            $found = true;
            break;
        }
    }
    if(!$found) {
        $newId = count($students) + 1;
        $student = [
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        ];
        array_push($students, $student);
        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData);
        return true;
    }
    return false;
}
function getStudent($id){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $student){
        if($student['id'] == $id){
            return $student;
        }
    }
    return  false;
}
function updateStudent($id, $fname, $lname, $roll){
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['id'] != $id){
            $found = true;
            break;
        }
    }
    if (!$found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData, LOCK_EX);
        return true;
    }
    return false;

}
?>

