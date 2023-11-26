<?php
/*
 

DESCRIPTION  

Write a function `reverse` which reverses a list (or in clojure's case, any list-like data structure)

(the dedicated builtin(s) functionalities are deactivated)


*/

function reverse(array $a): array {
  $arr = [];
  foreach($a as $ara) {
   array_unshift($arr , $ara);
  }
  return $arr;
}