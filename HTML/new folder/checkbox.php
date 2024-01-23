<?php
include_once "function.php";
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
          <p>
            <?php
$fname = '';
$lname = '';
$chacked = '';

if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
    $chacked = 'checked';
}
?>
            <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
}
?>
            <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
}?>
          </p>
          <p>
            First Name: <?php echo ($fname); ?> <br>
            Last Name: <?php echo ($lname); ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <form method="POST">
            <label for="fname">First name</label>
            <input type="text" name="fname" id="fname" value = "<?php echo ($fname); ?>" >

            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" value = "<?php echo ($lname); ?>">
            <div>
              <input type="checkbox" name="cb1" id="cb1"value="1" <?php echo ($chacked) ?>>
              <label for="cb1" class="label-inline">Chack Box </label>
            </div>

            <div>
              <label for="" class = "label">Select Some Fruits</label>
              <input type="checkbox" name="fruits[]" value="mango" <?php isFruitsCheck('mango')?>>
              <label for="fruits" class="label-inline">Mango </label><br>
              <input type="checkbox" name="fruits[]" value="orange"<?php isFruitsCheck('orange')?>>
              <label for="fruits" class="label-inline">Orange </label><br>
              <input type="checkbox" name="fruits[]" value="potata"<?php isFruitsCheck('potata')?>>
              <label for="fruits" class="label-inline">Potato </label><br>
              <input type="checkbox" name="fruits[]" value="cucmber"<?php isFruitsCheck('cucmber')?>>
              <label for="fruits" class="label-inline">Cucumber </label><br>
              <input type="checkbox" name="fruits[]" value="letus"<?php isFruitsCheck('letus')?>>
              <label for="fruits" class="label-inline"> Letus </label><br>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>