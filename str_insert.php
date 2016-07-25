<?php

function str_insert($str, $position, $insert) {
  if (gettype($str) !== 'string') {
    throw new Exception("The first argument must be a string");
  } else if (gettype($position) !== 'int') {
    throw new Exception("The second argument must be an integer");
  } else if (gettype($insert) !== 'string') {
    throw new Exception("The third argument must be a string");
  } else {
  
    $output = substr($str, 0, $position) . $insert . substr($str, $position, (strlen($str) - $position));
    
    echo $output;
  
  }
}

?>
