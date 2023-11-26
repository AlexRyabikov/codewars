<?php
/*
 

DESCRIPTION  

## Task:

Your task is to write a function which returns the sum of following series upto nth term(parameter).

    Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...
 
## Rules:
 
* You need to round the answer to 2 decimal places and return it as String.

* If the given value is 0 then it should return 0.00

* You will only be given Natural Numbers as arguments.

## Examples:(Input --> Output)

    1 --> 1 --> "1.00"
    2 --> 1 + 1/4 --> "1.25"
    5 --> 1 + 1/4 + 1/7 + 1/10 + 1/13 --> "1.57"



*/

function series_sum($n) {
    $res = [];
    for($i = 1; $i <= (3*$n-1);$i = $i + 3){
      $res[] = 1/$i;
    }
  return number_format(array_sum($res), 2, '.', ' ');
};