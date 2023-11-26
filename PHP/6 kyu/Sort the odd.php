<?php
/*
 

DESCRIPTION  

## Task

You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

### Examples

```
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
```

~~~if:lambdacalc
### Encodings

purity: `LetRec`  
numEncoding: `BinaryScott`  
export constructors `nil, cons` and deconstructor `foldl` for your `List` encoding  
~~~


*/

function sortArray(array $arr) : array {
  $odd = [];
  $c = 0;
  foreach($arr as $r){
    if($r%2 != 0) {
      $odd[] = $r;
    }
  }  
  sort($odd);
  $res = [];
  
  foreach($arr as $i){
    if($i%2 != 0){
      $res[] = $odd[$c];
      $c++;
    }
    else{
      $res[] = $i;
    }
  }

  return $res;
}