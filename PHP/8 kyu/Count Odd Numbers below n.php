<?php
/*
 

DESCRIPTION  

Given a number `n`, return the number of positive odd numbers below `n`, EASY!

### Examples (Input -> Output)
```
7  -> 3 (because odd numbers below 7 are [1, 3, 5])
15 -> 7 (because odd numbers below 15 are [1, 3, 5, 7, 9, 11, 13])
```

Expect large Inputs!

~~~if:lambdacalc
Use `numEncoding BinaryScott`
~~~
~~~if:bf

**Note for Brainfuck:**

Input 5 means the input will be a character with ASCII code 5, not the character '5'. Output similarly.

The valid input range is 0 <= input <= 127, in order to avoid differences between ASCII and Unicode. You will never have to read more than one byte.
~~~



*/

function oddCount($n) {
  return intdiv($n, 2);
}