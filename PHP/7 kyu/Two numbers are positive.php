<?php
/*
 

DESCRIPTION  

<h2>Task:</h2>

Your job is to write a function, which takes three integers `a`, `b`, and `c` as arguments, and returns `True` if exactly two of of the three integers are positive numbers (greater than zero), and `False` - otherwise.

<h2>Examples:</h2>

```python
two_are_positive(2, 4, -3) == True
two_are_positive(-4, 6, 8) == True
two_are_positive(4, -6, 9) == True
two_are_positive(-4, 6, 0) == False
two_are_positive(4, 6, 10) == False
two_are_positive(-14, -3, -4) == False
```
```javascript
twoArePositive(2, 4, -3) == true
twoArePositive(-4, 6, 8) == true
twoArePositive(4, -6, 9) == true
twoArePositive(-4, 6, 0) == false
twoArePositive(4, 6, 10) == false
twoArePositive(-14, -3, -4) == false
```
```csharp
TwoArePositive(2, 4, -3) == true
TwoArePositive(-4, 6, 8) == true
TwoArePositive(4, -6, 9) == true
TwoArePositive(-4, 6, 0) == false
TwoArePositive(4, 6, 10) == false
TwoArePositive(-14, -3, -4) == false
```

```rust
two_are_positive(2, 4, -3) == true
two_are_positive(-4, 6, 8) == true
two_are_positive(4, -6, 9) == true
two_are_positive(-4, 6, 0) == false
two_are_positive(4, 6, 10) == false
two_are_positive(-14, -3, -4) == false
```


*/

<?php
function twoArePositive(int $a, int $b, int $c): bool {
  $count = 0;
  $array = [$a,$b,$c];
  foreach ($array as $x) {
        if ($x > 0) {
          $count++;
        }
  }

  
  if($count==2){
    return true;
  }
  else {
    return false;
  }
}