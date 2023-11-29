
 """ 
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

 """ 

def opposite(number):
    if number != 0:
        return(number * -1)
    else:
        return(number)