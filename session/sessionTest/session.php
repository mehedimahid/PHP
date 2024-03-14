<?php
session_start();
$_SESSION['data'] = "Hello world";
echo $_SESSION['data'];
echo $_SESSION['data2'];
