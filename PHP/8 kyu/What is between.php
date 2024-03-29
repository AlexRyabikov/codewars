<?php
/*
 

DESCRIPTION  

Complete the function that takes two integers (`a, b`, where `a < b`) and return an array of all integers between the input parameters, **including** them.

For example:
```
a = 1
b = 4
--> [1, 2, 3, 4]
```


*/

function between(int $a, int $b): array {
  $arr = [];
  
  for ($i = $a; $i <= $b; $i++) {
    $arr[] = $i;
  }
  
  return $arr;
}