<?php
/*
 

DESCRIPTION  

Given a string made of digits `[0-9]`, return a string where each digit is repeated a number of times equals to its value. 

## Examples

```haskell
"312" should return "333122"
```

```haskell
"102269" should return "12222666666999999999"
```


*/

function digits_explode(string $s): string {
  $result = '';
  $array = str_split($s,1);
  foreach($array as $arr){
    $arr = (int)$arr;
    $result .= str_repeat($arr, $arr);
  }
  return $result;
}