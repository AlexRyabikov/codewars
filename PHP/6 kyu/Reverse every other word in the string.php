<?php
/*
 

DESCRIPTION  

Reverse every other word in a given string, then return the string. Throw away any leading or trailing whitespace, while ensuring there is exactly one space between each word. Punctuation marks should be treated as if they are a part of the word in this kata.



*/

function reverse($str) {
  $arr = explode(' ',$str);
  $res = '';
  
  foreach($arr as $k => $r){
    $r = trim($r);
    if($k%2 != 0){
      $res .= strrev($r).' ';
    }
    else{
      $res .= $r.' ';
    }
  }
  
  $res = trim($res);
  return $res;
  
}