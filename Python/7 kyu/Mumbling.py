
 """ 
This time no story, no theory. The examples below show you how to write function `accum`:

#### Examples:
```
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
```

The parameter of accum is a string which includes only letters from `a..z` and `A..Z`.
 """ 

def accum(s):
    arr = list(s)
    new_arr = list()
    i = 1
    for numb in s:
        new_arr.append(((numb*i) + '-').capitalize())
        i = i + 1
    result = ''.join(new_arr)
    result = result[:-1]
    return result