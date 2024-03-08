<?php
session_start([
  "session_lifetime" =>300//5 minite
]);
// session_destroy();
if(isset($_POST['username'])&&isset($_POST['password'])){
  if('admin'==$_POST['username'] && 'password' ==$_POST['password']){
    $_SESSION['loggedin']=true;
  }else{
    $_SESSION['loggedin'] =false;
  }
}
if(isset($_POST["logout"])){
  $_SESSION['loggedin'] = false;
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
          echo "Hello Admin, Welcome";
        }else{
          echo"Hello stranger, Login below";
        }
        ?>
    </div>
  </div>
  <div class="row" style="...">
    <div class="column column-60 column-offset-20">
      <?php 
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
        <form action="auth.php?logout=true" method="POST">
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
