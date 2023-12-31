<?php 
function factorial (int $n): int{ ///:int দিয়ে বুজানো হয় এই function int value return করবে 
  $result = 1;
  for ($i=$n; $i >1 ; $i--) { 
    $result *= $i;
  }
  return $result;
}

