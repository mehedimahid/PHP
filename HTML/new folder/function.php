<?php
function isChecked($inputArray, $value){
  if(isset($_REQUEST[$inputArray])&& is_array($_REQUEST[$inputArray])&& in_array($value, $_REQUEST[$inputArray])){
    echo "checked";
  }
}

function isFruitsCheck($value){
  if(isset($_REQUEST['fruits'])&& is_array($_REQUEST['fruits'])&& in_array($value, $_REQUEST['fruits'])){
    echo "checked";
  }
}