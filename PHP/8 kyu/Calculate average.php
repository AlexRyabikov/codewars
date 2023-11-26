<?php
/*
 

DESCRIPTION  

Write a function which calculates the average of the numbers in a given list.

**Note:** Empty arrays should return 0.


*/

function find_average($array) {
  $sum = 0;
  $count = count ($array);
  foreach($array as $arr){
    $sum += $arr;
  }
  $avg = $sum / $count;
  return $avg;
}