<?php
/*
 

DESCRIPTION  

Write a function that accepts a string, and returns the same string with all even indexed characters in each word upper cased, and all odd indexed characters in each word lower cased. The indexing just explained is zero based, so the zero-ith index is even, therefore that character should be upper cased and you need to start over for each word.

The passed in string will only consist of alphabetical characters and spaces(`' '`). Spaces will only be present if there are multiple words. Words will be separated by a single space(`' '`).

### Examples:

```
"String" => "StRiNg"
"Weird string case" => "WeIrD StRiNg CaSe"
```


*/

function toWeirdCase($string) {
  $arr = explode(' ', $string);
  $res = '';
  foreach($arr as $k => $v){
    $word = str_split($v);
    $aWord = '';
    foreach($word as $i => $r){
      if($i%2 != 0){
        $aWord .= strtolower($r);
      }
      else{
        $aWord .= strtoupper($r);
      }
    }
    $res .= $aWord.' ';
  }
  $res = rtrim($res);
  return $res;
}