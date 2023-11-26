<?php
/*
 

DESCRIPTION  

You are given an array (which will have a length of at least 3, but could be very large) containing integers. The array is either entirely comprised of odd integers or entirely comprised of even integers except for a single integer `N`. Write a method that takes the array as an argument and returns this "outlier" `N`.

## Examples

```
[2, 4, 0, 100, 4, 11, 2602, 36] -->  11 (the only odd number)

[160, 3, 1719, 19, 11, 13, -21] --> 160 (the only even number)
```



*/

function find($integers) {
  $odds = [];
  $evens = [];
  foreach ($integers as $item) {
    if ($item % 2) array_push($odds, $item);
    else array_push($evens, $item);
  }
  return count($evens) === 1 ? $evens[0] : $odds[0];
}