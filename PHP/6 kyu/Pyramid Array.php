<?php
/*
 

DESCRIPTION  

Write a function that when given a number >= 0, returns an Array of ascending length subarrays.

```
pyramid(0) => [ ]
pyramid(1) => [ [1] ]
pyramid(2) => [ [1], [1, 1] ]
pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
```

**Note:** the subarrays should be filled with `1`s

```if:c
Subarrays should not overlap; this will be tested.
Do not forget to de-allocate memory in `free_pyramid()`, this will be tested as well.
```


*/

function pyramid($n) {
  if($n == 0){
    return [];
  }
  else{
    $res = [];
    for($i = 1; $i <= $n; $i++){
      $one = [];
      for($k = 1; $k <= $i; $k++){
        $one[] = 1;
      }
      $res[] = $one;
    }
  return $res;
  }
  
}