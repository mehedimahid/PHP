<?php
function selectOption($options , $selectfruits){
  
  foreach ($options as $option) {
    $option =strtolower($option);
    $selectValue = '';
    if (in_array($option, $selectfruits)) {
    $selectValue = "selected";
}

    printf("<option value= '%s' %s > %s </option> \n" , $option, $selectValue , ucwords($option));
  }
}