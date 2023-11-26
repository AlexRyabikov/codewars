<?php
/*
 

DESCRIPTION  

Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.



*/

function findShort($str){
  $arr = explode(' ',$str);
  $len = [];
  foreach($arr as $r){
    $len[] = strlen($r);
  }
  return min($len);
}