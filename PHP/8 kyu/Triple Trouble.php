<?php
/*
 

DESCRIPTION  

# Triple Trouble

Create a function that will return a string that combines all of the letters of the three inputed strings in groups.  Taking the first letter of all of the inputs and grouping them next to each other.  Do this for every letter, see example below!

**E.g. Input: "aa", "bb" , "cc" => Output: "abcabc"** 

*Note: You can expect all of the inputs to be the same length.*



*/

function triple_trouble(string $one, string $two, string $three): string {
  $len = strlen($one);
  $str = '';
  $i = 0;
  while($i<=$len){
    $str .= substr($one,$i, 1).substr($two,$i, 1).substr($three,$i, 1);
    $i++;
  }
  return $str;
  
}