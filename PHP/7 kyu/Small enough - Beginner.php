<?php
/*
 

DESCRIPTION  

```if-not:perl
You will be given an `array` and a `limit` value. You must check that all values in the array are below or equal to the limit value. If they are, return `true`. Else, return `false`.
```

```if:perl
You will be given an `array` and a `limit` value. You must check that all values in the array are below or equal to the limit value. If they are, return `1`. Else, return `0`.
```
You can assume all values in the array are numbers.


*/

function smallEnough($a, $limit)
{
  $newArr = [];
  foreach($a as $ara) {
    if($ara<=$limit){
      $newArr[] = true;
    }
    else{
      $newArr[] = false;
    }
  }
  if(in_array(false, $newArr)){
    return false;
  }
  else{
    return true;
  }
}