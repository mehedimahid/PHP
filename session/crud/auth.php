<?php
session_start([
  // "session_lifetime" =>300//5 minite
  "cookie_lifetime" =>60//5 minite

]);

// session_destroy();
$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$error = false;
$fp = fopen("./data/users.txt","r");

if($username && $password){
  $_SESSION['loggedin'] = false;
  $_SESSION['user'] = false;
  $_SESSION['role'] = false;


  while($data = fgetcsv($fp)){
    if($username==$data[0] && $data[1]==hash("sha1",$password)){
      $_SESSION['loggedin']=true;
      $_SESSION['user']=$username;
      $_SESSION['role'] = $data[2];

      header("location:index.php");
    }
  }
  if(!$_SESSION['loggedin']){
    $error = true;
  }
}
if(isset($_GET["logout"])){
  $_SESSION['loggedin'] = false;
  $_SESSION['user'] = false;
  $_SESSION['role'] = false;

  header("location:index.php");
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
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
        <h2>Simple Authorization Project</h2>
    </div>
  </div>
  <div class="row">
    <div class="column column-60 column-offset-20">
        <?php
        if(true == $_SESSION['loggedin']){
          echo "</br>Hello Admin, Welcome";
        }else{
          echo"Hello stranger, Login below";
        }
        ?>
    </div>
  </div>
  <div class="row" style="margin-top:100px;">
    <div class="column column-60 column-offset-20">
      <?php 
      if($error){
        echo "<blockquote>Username or Password didn't match!</blockquote>";
      }
      if(false==$_SESSION['loggedin']){
      ?>
        <form method="POST">
          <label for="usename">UserName:</label>
          <input type="text" name="username" id="username">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password">
          <button type="submit" class="button-primary" name="submit">Log In</button>
        </form>
        <?php
      }else{
        ?>
        <form action="auth.php" method="POST">
          <input type="hidden" name="logout" value ="1">
          <button type="submit" class="button-primary" name="submit">Log out</button>
        </form>
        <?php
      };
        ?>
    </div>
  </div>
</div>
</body>
</html>
