<?php
/*
 

DESCRIPTION  

Build Tower
---

Build a pyramid-shaped tower, as an array/list of strings, given a positive integer `number of floors`. A tower block is represented with `"*"` character.

For example, a tower with `3` floors looks like this:

```
[
  "  *  ",
  " *** ", 
  "*****"
]
```

And a tower with `6` floors looks like this:

```
[
  "     *     ", 
  "    ***    ", 
  "   *****   ", 
  "  *******  ", 
  " ********* ", 
  "***********"
]
```

___

Go challenge [Build Tower Advanced](https://www.codewars.com/kata/57675f3dedc6f728ee000256) once you have finished this :)



*/

function tower_builder(int $n) {
  $arr = [];
  $n = $n*2 - 1;
  $maxLen = $n;
  while($n>0){
    if($n == $maxLen){
      $arr[] = str_repeat('*',$n);
    }
    else{
      $a = str_repeat('*',$n);
      $plus = ($maxLen - $n)/2;
      $elem = str_repeat(' ',$plus).$a.str_repeat(' ',$plus);
      array_unshift($arr , $elem);
    }
    $n = $n-2;
  }
  
  return $arr;
}