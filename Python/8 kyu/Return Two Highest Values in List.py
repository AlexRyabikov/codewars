
 """ 
In this kata, your job is to return the two distinct highest values in a list. If there're less than 2 unique values, return as many of them, as possible.

The result should also be ordered from highest to lowest.

Examples:

```
[4, 10, 10, 9]  =>  [10, 9]
[1, 1, 1]  =>  [1]
[]  =>  []
```
 """ 

def two_highest(agr):
    if len(agr) == 0:
        return []
    else:
        
        agrT = list(set(agr))
        agrT.sort()
        if len(agrT) > 1:
            return [agrT[-1],agrT[-2]]
        else:
            return [agrT[-1]]
    