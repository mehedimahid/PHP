<?php
session_name('myApp');
session_start([
  'cookie_lifetime' => 60
]);
$_SESSION['name']= 'session';
echo $_SESSION['name'];

//http: //localhost:3030/session.php
