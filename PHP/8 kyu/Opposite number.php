<?php
/*
 

DESCRIPTION  

Very simple, given an integer or a floating-point number, find its opposite.

Examples:
```
1: -1
14: -14
-34: 34
```

~~~if:sql
You will be given a table: `opposite`, with a column: `number`. Return a table with a column: `res`.
~~~



*/

function opposite($n) {
  return $n *(-1);
}