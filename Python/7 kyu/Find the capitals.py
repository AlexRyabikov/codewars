
 """ 
# Instructions 

Write a function that takes a single string (`word`) as argument. The function must return an ordered list containing the indexes of all capital letters in the string.

# Example (Input --> Output)

```
"CodEWaRs" --> [0,3,4,6]
```
 """ 

def capitals(word):
    res=[] 
    count = 0 
    for  i in word:
        if i.isupper():
            res.append(count) 
        count+=1
    return res