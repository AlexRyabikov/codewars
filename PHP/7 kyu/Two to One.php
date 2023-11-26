<?php
/*
 

DESCRIPTION  

Take 2 strings `s1` and `s2` including only letters from `a` to `z`.
Return a new **sorted** string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

#### Examples:
```
a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
```



*/

function longest($a, $b) {
  $array1 = str_split($a);
  $array2 = str_split($b);
  $result = array_merge($array1, $array2);
  $result = array_unique($result);
  sort($result);
  $str_result = implode($result);
  return $str_result;

}