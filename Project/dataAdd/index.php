<?php
require_once "inc/functions.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if('seed' ==$task){
    seed();
    $info = 'Seeding  is Complete';
}
$fname = '';
$lname = '';
$roll= '';
if (isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    if($fname !='' && $lname !='' && $roll !=''){
        $result = addStudents($fname,$lname,$roll);
        if($result){
            header("location:../index.php?task=report");
        }else{
            $error= 1;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Project 2 - CRUD</h2>
            <p>A sample project to perform CRUD operations using plain files and PHP</p>
            <?php include_once( 'inc/templates/nav.php' ); ?>
            <hr/>
            <?php
            if ( $info != '' ) {
                echo "<p>{$info}</p>";
            }
            ?>
        </div>
    </div>
    <?php if ( '1' == $error ): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
               <blockquote>
                   Duplicate Roll Number
               </blockquote>
            </div>
        </div>
    <?php endif;?>
    <?php if ( 'report' == $task ): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
    <?php endif;?>
    <?php if ( 'add' == $task ): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
               <form action="./index.php?task=add" method="POST">
                   <label for="fname">First Name</label>
                   <input type="text" name="fname" id="fname" value="<?php echo $fname?>">
                   <label for="lname">Last Name</label>
                   <input type="text" name="lname" id="lname"value="<?php echo $lname?>">
                   <label for="roll">Roll</label>
                   <input type="number" name="roll" id="roll"value="<?php echo$roll?>">
                   <button type="submit" class="button-primary" name="submit">Save</button>
               </form>
            </div>
        </div>
    <?php endif;?>
</div>
</body>
</html>