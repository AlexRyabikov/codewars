
 """ 
Given an array of integers, return a new array with each value doubled.

For example:

`[1, 2, 3] --> [2, 4, 6]`

~~~if:racket
```racket
;for racket you are given a list
(maps '(1 2 3)) ; returns '(2 4 6)
```
~~~
 """ 

def maps(a):
    data = [i * 2 for i in a]
    return data