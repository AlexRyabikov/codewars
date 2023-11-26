<?php
/*
 

DESCRIPTION  

Take an array and remove every second element from the array. Always keep the first element and start removing with the next element.

### Example:

```if-not:c
`["Keep", "Remove", "Keep", "Remove", "Keep", ...]` --> `["Keep", "Keep", "Keep", ...]`
```

```if:c
~~~c
size_t length = 5;
remove_every_other(&length, {1, 2, 3, 4, 5});
// -->  {1, 3, 5}
~~~
```

None of the arrays will be empty, so you don't have to worry about that!



*/

function removeEveryOther($array) {
  return array_filter(array_map(function ($value, $key) {
    return $key % 2 === 0 ? $value : null;
  }, $array, array_keys($array)));
}