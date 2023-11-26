<?php
/*
 

DESCRIPTION  

Modify the `kebabize` function so that it converts a camel case string into a kebab case.


```
"camelsHaveThreeHumps"  -->  "camels-have-three-humps"
"camelsHave3Humps"  -->  "camels-have-humps"
"CAMEL"  -->  "c-a-m-e-l"
```

Notes:
  - the returned string should only contain lowercase letters


*/

function kebabize($string) {
  $res = preg_replace('/([A-Z])/','-$1',$string);
  $res = preg_replace('/([0-9]+)/','',$res);
  $res = strtolower($res);
  $res = trim($res,'-');
  return $res;
  
}