<?php
/*
 

DESCRIPTION  

Given 2 strings, `a` and `b`, return a string of the form short+long+short, with the shorter string on the outside
and the longer string on the inside. The strings will not be the same length, but they may be empty ( `zero` length ).

Hint for R users:
<blockquote>The length of string is not always the same as the number of characters</blockquote>

For example: **(Input1, Input2) --> output**

```
("1", "22") --> "1221"
("22", "1") --> "1221"
```



*/

function shortLongShort(string $s1, string $s2): string
{
  if (strlen($s1)>strlen($s2))
    return $s2.$s1.$s2;
  else
    return $s1.$s2.$s1;
}