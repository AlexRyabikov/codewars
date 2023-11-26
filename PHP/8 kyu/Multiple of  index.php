<?php
/*
 

DESCRIPTION  

Return a new array consisting of elements which are multiple of their own index in input array (length > 1).

## Some cases: 

````if-not:julia
```javascript
[22, -6, 32, 82, 9, 25] =>  [-6, 32, 25]

[68, -1, 1, -7, 10, 10] => [-1, 10]

[-56,-85,72,-26,-14,76,-27,72,35,-21,-67,87,0,21,59,27,-92,68] => [-85, 72, 0, 68]
```
````
````if:julia
```julia
[22, -6, 32, 82, 9, 25] =>  [22, -6]

[68, -1, 1, -7, 10, 10] => [68, 10]

[-56,-85,72,-26,-14,76,-27,72,35,-21,-67,87,0,21,59,27,-92,68] => [-56, 72, 72, 0]
```
````




*/

function multipleOfIndex(array $arr) : array {
  $newArr = array();
  $i = 0;
  foreach($arr as $ara) {
    if($i == 0) {
      if($ara == 0) {
        $newArr[] = $ara;
      }
    }
    if($i !=0){
        if($ara%$i == 0) {
            $newArr[] = $ara;
         }
    }

    

    $i++;
  }
  return $newArr;
}