
 """ 
Complete the function that accepts a string parameter, and reverses each word in the string. **All** spaces in the string should be retained.

## Examples
```
"This is an example!" ==> "sihT si na !elpmaxe"
"double  spaces"      ==> "elbuod  secaps"
```
 """ 

def reverse_words(text):
    lst = text.split(' ')
    newLst = []
    for i in lst:
        newLst.append(i[::-1])
    res = ' '.join(newLst)
    return res