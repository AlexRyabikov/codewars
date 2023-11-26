<?php
/*
 

DESCRIPTION  

### Description:
  Groups of characters decided to make a battle. Help them to figure out which group is more powerful. Create a function that will accept 2 strings and return the one who's stronger.

### Rules:
* Each character have its own power: `A = 1, B = 2, ... Y = 25, Z = 26`
* Strings will consist of uppercase letters only
* Only two groups to a fight.
* Group whose total power (`A + B + C + ...`) is bigger wins.
* If the powers are equal, it's a tie.

### Examples:
```cobol
      * "ONE", "TWO"  -> "TWO"`
      * "ONE", "NEO"  -> "Tie!"
```

### Related kata:
- [Battle of the characters (Medium)](https://www.codewars.com/kata/595e9f258b763bc2d2000032)


*/

function battle($x, $y) {
  $arrX = str_split($x,1);
  $arrY = str_split($y,1);
  
  $countX = 0;
  $countY = 0;
  
  foreach($arrX as $arr) {
    $countX += ord(strtoupper($arr)) - ord('A') + 1;
  }
  
  foreach($arrY as $arr) {
    $countY += ord(strtoupper($arr)) - ord('A') + 1;
  }
  
  if($countX > $countY) {
    return $x;
  }
  else if($countX < $countY) {
    return $y;
  }
  else {
    return 'Tie!';
  }
  
}