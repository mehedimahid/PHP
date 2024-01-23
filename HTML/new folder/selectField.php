<?php
include_once "selectFildFun.php";
$fruits = ['Apple', 'Banana', 'coconut', 'orange', 'Mango'];
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
// <!--single select -->
// if(isset($_REQUEST['fruits']) && $_REQUEST['fruits'] != ''){
//     printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
// }
//<!--multiple select -->

?>
          </p>
          <p>
            <?php
//<!--multiple select -->

// print_r($_POST);
$selectFruits = $_POST['fruits'] ?? array();
// $selectFruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
$count = count($selectFruits);
if ($count > 0) {
    echo "You have select: " . join(", ", $selectFruits);
}
?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <form method="POST">
            <label for="fruits">Select Some Fruits</label>
            <!-- <select name="fruits" id="fruits"> --><!--single select -->
            <select style = "height: 200px" name="fruits[]" id="fruits" multiple><!--multiple select -->
              <option value="" disabled selected>Select Fruits</option>
              <?php selectOption($fruits, $selectFruits);?>
            </select>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>