<?php
/*
 

DESCRIPTION  

```if-not:c
This kata is about static method that should return different values.
```
```if:c
This kata is about a function that should return different values.
```
On the first call it must be 1, on the second and others - it must be a double from previous value. 

Look tests for more examples, good luck :)


*/

class A
{ 
  private static int $calls = 0;
  public static function getNumber(): int
  {
    return 2 ** self::$calls++;
  }
}