
 """ 
Take 2 strings `s1` and `s2` including only letters from `a` to `z`.
Return a new **sorted** string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.

#### Examples:
```
a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
```

 """ 

def longest(a1, a2):
    
    merge = a1 + a2

    merge_list = list(merge)

    merge_set = set(merge_list)

    merge_list = list(merge_set)
    
    merge_list.sort()
    
    return ''.join(merge_list)