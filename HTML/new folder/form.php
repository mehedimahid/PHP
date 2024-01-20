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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deleniti quo explicabo officiis atque possimus placeat, eligendi, perferendis, voluptate nostrum et sequi vero repellat deserunt dolores ipsum natus mollitia culpa.</p>
          <p>
            <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){ ?>
              First Name: <?php echo ($_GET['fname'])?> <br>
            <?php }?>
            <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){ ?>
              Last Name: <?php echo ($_GET['lname'])?><br>
            <?php }?>

          </p>
        </div>
      </div>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <form action="">
            <label for="fname">First name</label>
            <input type="text" name="fname" id="fname">

            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname">
            
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>