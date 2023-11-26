<?php
/*
 

DESCRIPTION  

## Perimeter sequence

The first three stages of a sequence are shown.

![blocks](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVw-YEuGbD31EB47C7PSi_RpBxr5EJSydV9dj5lOmzsDWFsoAs)

The blocksize is `a` by `a` and `a ≥ 1`.

What is the perimeter of the `n`th shape in the sequence (`n ≥ 1`) ?


*/

function perimeter_sequence(int $a, int $n): int {
  return $a * $n * 4;
}