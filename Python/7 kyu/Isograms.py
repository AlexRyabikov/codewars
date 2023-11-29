
 """ 
An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

**Example: (Input --> Output)**
```if-not:factor
"Dermatoglyphics" --> true
"aba" --> false
"moOse" --> false (ignore letter case)
```

```if:factor
"Dermatoglyphics" -> t
"aba" -> f
"moOse" -> f (ignore letter case)
```
```fsharp
isIsogram "Dermatoglyphics" = true
isIsogram "moose" = false
isIsogram "aba" = false
```

 """ 

def is_isogram(string):
    a = 0
    b = 0
    string = string.lower()
    lenS = len(string)
    while(a < lenS):
        b = a + 1
        while(b < lenS):
            if(string[a] == string[b]):
                return False    
            b = b + 1
        a = a + 1
    return True