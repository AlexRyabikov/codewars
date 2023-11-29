
 """ 
You are given two arrays `a1` and `a2` of strings. Each string is composed with letters from `a` to `z`.
Let `x` be any string in the first array and `y` be any string in the second array. 

  `Find max(abs(length(x) − length(y)))`

If `a1` and/or `a2` are empty return `-1` in each language
except in Haskell (F#) where you will return `Nothing` (None).

#### Example:
```
a1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"]
a2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]
mxdiflg(a1, a2) --> 13

```

#### Bash note:
 - input : 2 strings with substrings separated by `,`
 - output: number as a string
 """ 

def mxdiflg(a1, a2):
    if not a1 or not a2:
        return -1
    
    lengths1 = [len(x) for x in a1]
    lengths2 = [len(x) for x in a2]

    l1_max = max(lengths1)
    l1_min = min(lengths1)
    l2_max = max(lengths2)
    l2_min = min(lengths2)

    return max(l1_max - l2_min, l2_max - l1_min)