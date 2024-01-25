<?php
$allowedType =[
    'image/jpg',
    'image/png',
    'image/jpeg'
];
if($_FILES){
    $totalFiles = count($_FILES['photo']['name']);
    for ($i= 0; $i< $totalFiles; $i++){
        if(in_array($_FILES['photo']['type'][$i], $allowedType) !== false){
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "./files/". $_FILES['photo']['name'][$i]);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"
    />
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>
                My First form
            </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deleniti quo      explicabo officiis atque possimus placeat, eligendi, perferendis, voluptate   nostrum et sequi vero repellat deserunt dolores ipsum natus mollitia culpa.
            </p>
            <pre>
            <p>
              <?php
              print_r($_POST);
              print_r($_FILES);

              ?>
            </p>
          </pre>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" enctype = "multipart/form-data">
                <label for="fname">First Name</label>
                <input type="text" name ="fname" id ="fname">

                <label for="lname">Last Name</label>
                <input type="text" name ="lname" id ="lname">

                <label for="photo">Photo</label>
                <input type="file" name ="photo[]" id ="photo"><br>
                <input type="file" name ="photo[]" id ="photo"><br>
                <input type="file" name ="photo[]" id ="photo"><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

