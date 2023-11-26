<?php
/*
 

DESCRIPTION  

Implement a function which convert the given boolean value into its string representation.

Note: Only valid inputs will be given.



*/

function booleanToString($b) {
  if($b == 1){
    return 'true';
  }
  else {
    return 'false';
  }
}