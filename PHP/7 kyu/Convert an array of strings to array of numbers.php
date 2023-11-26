<?php
/*
 

DESCRIPTION  

## Oh no!
Some really funny web dev gave you a _sequence of numbers_ from his API response as an _sequence of strings_!

You need to cast the whole array to the correct type.

Create the function that takes as a parameter a sequence of numbers represented as strings and outputs a sequence of numbers.

ie:``` ["1", "2", "3"] ``` to ``` [1, 2, 3] ```

Note that you can receive floats as well.


*/

function toNumberArray(array $stringArray) : array {
  $result = [];
  foreach($stringArray as $r){
    $result[] = (float)$r;
  }
  return $result;
}