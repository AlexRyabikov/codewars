<?php
/*
 

DESCRIPTION  

You are given a string of letters and an array of numbers.  
The numbers indicate positions of letters that must be removed, in order, starting from the beginning of the array.  
After each removal the size of the string decreases (there is no empty space).  
Return the only letter left.

Example:


~~~if-not:java
```
let str = "zbk", arr = [0, 1]
    str = "bk", arr = [1]
    str = "b", arr = []
    return 'b'
```
~~~

~~~if:java
```java
    str = "zbk", arr = {0, 1}
    str = "bk", arr = {1}
    str = "b", arr = {}
    return "b"
```
~~~

#### Notes

* The given string will never be empty.
* The length of the array is always one less than the length of the string.
* All numbers are valid.
* There can be duplicate letters and numbers.

If you like this kata, check out the next one: [Last Survivors Ep.2](https://www.codewars.com/kata/60a1aac7d5a5fc0046c89651)



*/

function lastSurvivor(string $letters, array $coords): string {
  foreach ($coords as $c) {
    $letters = substr_replace($letters, "", $c, 1);
  }
  return $letters;
}