<?php
/*
 

DESCRIPTION  

Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (`a, e, i, o, u`).

If they are, change the array value to a string of that vowel.

Return the resulting array.


*/

function isVow(array $a)
{
    $arr = array();
    foreach($a as $ara){
      switch($ara){
        case 117:
          $arr[] = 'u';
          break;
        case 97:
          $arr[] = 'a';
          break;
        case 101:
          $arr[] = 'e';
          break;
        case 105:
          $arr[] = 'i';
          break;
        case 111:
          $arr[] = 'o';
          break;
        default:
          $arr[] = $ara;
      }
    }

  return $arr;
}