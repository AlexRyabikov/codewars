<?php
/*
 

DESCRIPTION  

Complete the solution so that it returns a formatted string. The return value should equal "Value is VALUE"  where value is a 5 digit padded number. 

Example:

```cpp
solution(5); // should return "Value is 00005"
```
```c
solution(5); // should return "Value is 00005"
```
```factor
5 solution ! should return "Value is 00005"
```
```haskell
solution 5  -- should return "Value is 00005"
```
```javascript
solution(5) // should return "Value is 00005"
```
```python
solution(5)  # should return "Value is 00005"
```



*/

function solution($value){
  
  if(strlen($value) >= 5){
    $res = $value;
  }
  else{
    $zeroes = 5 - strlen($value);
    $res = str_repeat(0,$zeroes) . $value;
  }
  
  return "Value is ".$res;
};