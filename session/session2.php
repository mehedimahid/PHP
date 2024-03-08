<?php
session_name('myApp');
session_start();
echo $_SESSION['name'];//session.php থেকেও session2.php তেও সংজক পাওয়া যাবে
