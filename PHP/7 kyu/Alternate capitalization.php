<?php
/*
 

DESCRIPTION  

Given a string, capitalize the letters that occupy even indexes and odd indexes separately, and return as shown below. Index `0` will be considered even.

For example, `capitalize("abcdef") = ['AbCdEf', 'aBcDeF']`. See test cases for more examples.

The input will be a lowercase string with no spaces.

Good luck!

If you like this Kata, please try: 

[Indexed capitalization](https://www.codewars.com/kata/59cfc09a86a6fdf6df0000f1)

[Even-odd disparity](https://www.codewars.com/kata/59c62f1bdcc40560a2000060)


*/

function capitalize($s) {
  $res = [];
  $s1 = '';
  $s2 = '';
  
 
  $len = strlen($s);
  
  for($i = 0; $i<=$len;$i++){
    if($i%2==0){
      $s1 .= strtoupper( substr($s,$i,1) );
      $s2 .= strtolower(substr($s,$i,1) );
    }
    else{
      $s1 .= strtolower(substr($s,$i,1) );
      $s2 .= strtoupper(substr($s,$i,1) );
    }
  }
  $res[] = $s1;
  $res[] = $s2;
  return $res;
}