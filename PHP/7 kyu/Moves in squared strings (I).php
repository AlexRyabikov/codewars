<?php
/*
 

DESCRIPTION  

This kata is the first of a sequence of four about "Squared Strings".

You are given a string of `n` lines, each substring being `n` characters long: For example:

`s = "abcd\nefgh\nijkl\nmnop"`

We will study some transformations of this square of strings.

- Vertical mirror:
vert_mirror (or vertMirror or vert-mirror)
```
vert_mirror(s) => "dcba\nhgfe\nlkji\nponm"
```
- Horizontal mirror:
hor_mirror (or horMirror or hor-mirror)
```
 hor_mirror(s) => "mnop\nijkl\nefgh\nabcd"
```

or printed:

```
vertical mirror   |horizontal mirror   
abcd --> dcba     |abcd --> mnop 
efgh     hgfe     |efgh     ijkl 
ijkl     lkji     |ijkl     efgh 
mnop     ponm     |mnop     abcd 
```

#### Task:
- Write these two functions

and

- high-order function `oper(fct, s)` where

 - fct is the function of one variable f to apply to the string `s`
(fct will be one of `vertMirror, horMirror`)

#### Examples:
```
s = "abcd\nefgh\nijkl\nmnop"
oper(vert_mirror, s) => "dcba\nhgfe\nlkji\nponm"
oper(hor_mirror, s) => "mnop\nijkl\nefgh\nabcd"
```
#### Note:
The form of the parameter `fct` in oper
changes according to the language. You can see each form according to the language in "Sample Tests".

#### Bash Note:
The input strings are separated by `,` instead of `\n`. The output strings should be separated by `\r` instead of `\n`. See "Sample Tests".



*/

function vertMirror($s)
{
    return join("\n", array_map(function ($word) {
        return join("", array_reverse(str_split($word)));
    }, explode("\n", $s)));
}

function horMirror($s)
{
    return join("\n", array_reverse(explode("\n", $s)));
}

function oper($fct, $s)
{
    return $fct($s);
}