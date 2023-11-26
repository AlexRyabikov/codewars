<?php
/*
 

DESCRIPTION  

Write a method (or function, depending on the language) that converts a string to camelCase, that is, all words must have their first letter capitalized and spaces must be removed.

#### Examples (input --> output):

```
"hello case" --> "HelloCase"
"camel case word" --> "CamelCaseWord"
```

Don't forget to rate this kata! Thanks :)



*/

function camel_case(string $s): string {
  if(strlen($s)==0){
    return '';
  }
  else{
    $s = ucwords($s);
    $s = str_replace(' ','',$s);
    return $s;
  }
}