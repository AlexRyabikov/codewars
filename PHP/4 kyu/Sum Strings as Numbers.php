<?php
/*
 

DESCRIPTION  

Given the string representations of two integers, return the string representation of the sum of those integers.

For example:
```javascript
sumStrings('1','2') // => '3'
```
```c
strsum("1", "2")     => 3 
```

A string representation of an integer will contain no characters besides the ten numerals "0" to "9".

I have removed the use of `BigInteger` and `BigDecimal` in java

Python:
your solution need to work with huge numbers (about a milion digits), converting to int will not work.


*/

function sum_strings($a, $b) {
    $result = '';
    $carry = 0;

    $a = strrev($a);
    $b = strrev($b);

    $lenA = strlen($a);
    $lenB = strlen($b);
    $maxLen = max($lenA, $lenB);

    for ($i = 0; $i < $maxLen; $i++) {
        $digitA = ($i < $lenA) ? intval($a[$i]) : 0;
        $digitB = ($i < $lenB) ? intval($b[$i]) : 0;

        $sum = $digitA + $digitB + $carry;
        $carry = (int)($sum / 10);
        $digit = $sum % 10;

        $result .= $digit;
    }

    if ($carry > 0) {
        $result .= $carry;
    }
    
    $res = strrev($result);
    while((substr($res,0,1) == '0')){
      if(substr($res,0,1) == '0'){
        $res = substr($res,1);
      }
    }
   
    return $res;
}