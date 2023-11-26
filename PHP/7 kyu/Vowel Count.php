<?php
/*
 

DESCRIPTION  

Return the number (count) of vowels in the given string. 

We will consider `a`, `e`, `i`, `o`, `u` as vowels for this Kata (but not `y`).

The input string will only consist of lower case letters and/or spaces.



*/

function getCount($str) {
  $vowelsCount = 0;
  $vowelArr = ["a","e","i","o","u"];
  $arr = str_split($str);
  foreach($arr as $ara){
    if(in_array($ara,$vowelArr)){
      $vowelsCount++;
    }
  }
  
  return $vowelsCount;
}