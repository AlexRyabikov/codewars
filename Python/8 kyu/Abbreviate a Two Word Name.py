
 """ 
Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

The output should be two capital letters with a dot separating them.

It should look like this:

`Sam Harris` => `S.H`

`patrick feeney` => `P.F`

~~~if:riscv
RISC-V: The function signature is:

```c
char *get_initials(const char *full_name, char initials[4]);
```

Write your result to `initials`, and return that buffer.
~~~
 """ 

def abbrev_name(name):
    list = name.split(' ')
    res = list[0][0] + '.' + list[1][0]
    return res.upper()