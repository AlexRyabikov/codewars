<?php
/*
 

DESCRIPTION  

**Description:**

We want to generate a function that computes the series starting from 0 and ending until the given number.

Example:
----

**Input:**

    > 6

**Output:**

   > 0+1+2+3+4+5+6 = 21
   
**Input:**

    > -15

**Output:**

   > -15<0
   
**Input:**

    > 0

**Output:**

   > 0=0



*/

class SequenceSum {
  public function showSequence($count) {
    $res = '';
    $sum = 0;
    for($i=0;$i<=$count;$i++){
      $res .= $i.'+';
      $sum += $i;
    }
    $res = rtrim($res,'+');
    $res = $res.' = '.$sum;
    if($count > 0){
      return $res;  
    }
    else if($count<0){
      return "$count<0";
    }
    else{
      return "0=0";
    }
    
  }
}