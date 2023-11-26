<?php
/*
 

DESCRIPTION  

Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

# Example

For input `[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]`, you should return `[10, -65]`.


*/

function countPositivesSumNegatives($input) {
  $posi = 0;
  $neg = 0;
  if(!empty($input)){
  foreach ($input as $num) {
        if($num < 0) {
          $neg += $num;
        } 
       else if ($num > 0) {
          $posi = $posi + 1;
       }
  }
    }
  
  $output = array();
  $output[] = $posi;
  $output[] = $neg;
  if(($posi != 0) || ($neg != 0)){
    return $output;
  }
  else {
    return [];
  }
  

}