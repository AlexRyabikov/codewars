<?php
/*
 

DESCRIPTION  

Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string). 

Examples:

```javascript
solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false
```
```coffeescript
solution('abc', 'bc') # returns true
solution('abc', 'd') # returns false
```
```python
solution('abc', 'bc') # returns true
solution('abc', 'd') # returns false
```
```go
solution("abc", "bc") // returns true
solution("abc", "d") // returns false
```
```prolog
solution("abc", "bc"). % match
\+ solution("abc", "d"). % no match
```
```clojure
(solution "abc" "bc") ; returns true
(solution "abc" "d'" ; returns false
```
```lua
strEndsWith('abc', 'bc') -- returns true
strEndsWith('abc', 'd') -- returns false
```
```cobol
      StringEndsWith('abc', 'bc')
      *     -->      result = 1
      StringEndsWith('abc', 'd')
      *     -->      result = 0
```
```scala
solution("abc", "bc") // returns true
solution("abc", "d") //returns false
```


*/

function solution($str, $ending) {
  $lenstr = strlen($ending);
  if($ending == ''){
    return true;
  }
  else if(substr($str,-1*$lenstr) == $ending){
    return true;
  }
  else {
    return false;
  }
}