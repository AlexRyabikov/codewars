
 """ 
If you can't sleep, just count sheep!!

## Task:
Given a non-negative integer, `3` for example, return a string with a murmur: `"1 sheep...2 sheep...3 sheep..."`.  Input will always be valid, i.e. no negative integers.

 """ 

def count_sheep(n):
    res = ''
    if n <= 0:
        return ''
    else:
        for x in range(1,n+1,1):
            res = res + str(x) + " sheep..."
    return res.strip()