<?php
/*
 

DESCRIPTION  

Write function heron which calculates the area of a triangle with sides a, b, and c (x, y, z in COBOL).

Heron's formula:
```math
\sqrt{s * (s - a) * (s - b) * (s - c)}
```
where
```math
s = \frac{a + b + c} 2
```
Output should have 2 digits precision.



*/

function heron($a, $b, $c)
{
  $s = ($a+$b+$c)/2;
  $result = $s * ($s - $a) * ($s - $b) * ($s - $c);
  $result = sqrt($result);
  return $result;
}