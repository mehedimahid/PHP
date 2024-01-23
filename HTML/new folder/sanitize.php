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
            ?>
            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){ 
              //htmlspecialchars() use korle keo ar onno kono script/js bahir theke chalate parbe na ata na thakle exp:<script> alert('hello')</script> ata chalale akta alert dekabe
              // $fname =htmlspecialchars( $_REQUEST['fname']);
              //filter input= input gulo ke  sanitize kore
              //for more=  https: //www.php.net/manual/en/filter.filters.sanitize.php
              $fname =filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
            }
            ?>
            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ 
              $lname =filter_input(INPUT_POST ,'lname', FILTER_SANITIZE_STRING);
             }?>
          </p>
          <p>
            First Name: <?php echo($fname); ?> <br>
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
            <input type="text" name="lname" id="lname" value = "<?php echo ($lname);?>">
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>