<?php
/*
 

DESCRIPTION  

Write a method, that will get an integer array as parameter and will process every number from this array.

Return a new array with processing every number of the input-array like this:

If the number has an integer square root, take this, otherwise square the number.

#### Example

```
[4,3,9,7,2,1] -> [2,9,3,49,4,1]
```

#### Notes

The input array will always contain only positive numbers, and will never be empty or null.

~~~if:lambdacalc
#### Encodings

purity: `LetRec`  
numEncoding: `Scott`  
export constructors `Nil, Cons` and deconstructor `foldr` for your `List` encoding  
~~~


*/

function squareOrSquareRoot($array) {
  foreach($array as $value) {
    if(floor(sqrt($value)) == sqrt($value)){
       $newArray[] = (int)sqrt($value);
    } 
    else {
      $newArray[] = (int)$value**2;
    }
  }
  return $newArray;
}