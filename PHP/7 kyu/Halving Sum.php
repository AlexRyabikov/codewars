<?php
/*
 

DESCRIPTION  

## Task

Given a positive integer `n`, calculate the following sum: 

```
n + n/2 + n/4 + n/8 + ...
``` 

All elements of the sum are the results of integer division.

## Example

```
25  =>  25 + 12 + 6 + 3 + 1 = 47
```


*/

function halvingSum($n) {
  $sum = 0;
  
  for($i = 1; $i<=$n;$i = $i*2){
    $sum += floor($n/$i);
  }
 return (int)$sum;
}