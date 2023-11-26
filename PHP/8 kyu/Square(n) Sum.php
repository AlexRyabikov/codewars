<?php
/*
 

DESCRIPTION  

Complete the square sum function so that it squares each number passed into it and then sums the results together.

For example, for `[1, 2, 2]` it should return `9` because `$1^2 + 2^2 + 2^2 = 9$`.

```if:racket
In Racket, use a list instead of an array, so '(1 2 2) should return 9.
```



*/

function square_sum($numbers) : int {
  $summ = 0;
  foreach($numbers as $number){
    $summ += $number*$number;
  }
  
  return $summ;
}