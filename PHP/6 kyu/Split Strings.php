<?php
/*
 

DESCRIPTION  

Complete the solution so that it splits the string into pairs of two characters.  If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

Examples:
```
* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']
```



*/

function solution($str) {
  $arr = str_split($str,2);
  $res = [];
  if(strlen($str)==0){
    return [];
  }
  else{
    
 
  foreach($arr as $r){
    if(strlen($r) < 2){
      $res[] = $r.'_';
    }
    else{
      $res[] = $r;
    }
  }
  return $res;
  
  }
}