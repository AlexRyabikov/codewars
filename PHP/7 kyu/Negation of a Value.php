<?php
/*
 

DESCRIPTION  

In programming you know the use of the logical negation operator (**!**), it reverses the meaning of a condition.

```javascript
!false = true
!!false = false
```

Your task is to complete the function 'negationValue()' that takes a string of negations with a value and returns what the value would be if those negations were applied to it.

```javascript
negationValue("!", false); //=> true
negationValue("!!!!!", true); //=> false
negationValue("!!", []); //=> true
```
```python
negation_value("!", False) #=> True
negation_value("!!!!!", True) #=> False
negation_value("!!", []) #=> False
```
```julia
negationvalue("!", false) #=> true
negationvalue("!!!!!", true) #=> false
```
```dart
negationValue("!", false); //=> true
negationValue("!!!!!", true); //=> false
```
```php
negationValue("!", false); //=> true
negationValue("!!!!!", true); //=> false
negationValue("!!", []); //=> false
```

Do not use the `eval()` function or the `Function()` constructor in JavaScript.

Note: Always return a boolean value, even if there're no negations.



*/

function negationValue($str, $val) {
  if(strlen($str)%2==0){
    $sv = true;
  }
  else{
    $sv = false;
  }
  
  if($sv != $val){
    return false;
  }
  else{
    return true;
  }
}