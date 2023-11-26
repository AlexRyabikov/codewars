<?php
/*
 

DESCRIPTION  

### Unfinished Loop - Bug Fixing #1

Oh no, Timmy's created an infinite loop! Help Timmy find and fix the bug in his unfinished for loop!



*/

function createArray($number){
  $newArray = array();
  
  for($count = 1; $count <= $number;){
    $newArray[] = $count;
    $count++;
  }
  
  return $newArray;
}