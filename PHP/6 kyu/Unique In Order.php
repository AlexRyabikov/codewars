<?php
/*
 

DESCRIPTION  

Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

For example:

```cpp
uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
uniqueInOrder([1,2,2,3,3])       == {1,2,3}
```
```javascript
uniqueInOrder('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
uniqueInOrder('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
uniqueInOrder([1,2,2,3,3])       == [1,2,3]
```
```python
unique_in_order('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
unique_in_order('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
unique_in_order([1, 2, 2, 3, 3])   == [1, 2, 3]
unique_in_order((1, 2, 2, 3, 3))   == [1, 2, 3]
```
```ruby
unique_in_order('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
unique_in_order('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
unique_in_order([1,2,2,3,3])       == [1,2,3]
```
```haskell
uniqueInOrder "AAAABBBCCDAABBB" == "ABCDAB"
uniqueInOrder "ABBCcAD"         == "ABCcAD"
uniqueInOrder [1,2,2,3,3]       == [1,2,3]
```
```crystal
unique_in_order("AAAABBBCCDAABBB") == ['A', 'B', 'C', 'D', 'A', 'B']
unique_in_order("ABBCcAD")         == ['A', 'B', 'C', 'c', 'A', 'D']
unique_in_order([1,2,2,3,3])       == [1,2,3]
```
```scala
uniqueInOrder("AAAABBBCCDAABBB")   == List('A', 'B', 'C', 'D', 'A', 'B')
uniqueInOrder("ABBCcAD")           == List('A', 'B', 'C', 'c', 'A', 'D')
uniqueInOrder(List(1, 2, 2, 3, 3)) == List(1, 2, 3)
```



*/

function uniqueInOrder($iterable){
  if(!is_array($iterable)){
    $result = str_split($iterable);
  }
  else{
    $result = $iterable;
  }
  
  
  $arr = [];
  foreach($result as $r){
    if($r != end($arr)){
      $arr[] = $r;
    }
  }
  return $arr;
}