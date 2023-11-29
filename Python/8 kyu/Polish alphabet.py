
 """ 
There are 32 letters in the Polish alphabet: 9 vowels and 23 consonants. 
 
Your task is to change the letters with diacritics:

```
ą -> a,
ć -> c,
ę -> e,
ł -> l,
ń -> n,
ó -> o,
ś -> s,
ź -> z,
ż -> z
```
and print out the string without the use of the Polish letters.


For example:
```
"Jędrzej Błądziński"  -->  "Jedrzej Bladzinski"
```
 """ 

def correct_polish_letters(st): 
    arr = {
        'ą' : 'a',
        'ć' :'c',
        'ę' : 'e',
        'ł' : 'l',
        'ń' : 'n',
        'ó' : 'o',
        'ś' : 's',
        'ź' : 'z',
        'ż' : 'z'}
    res = ''
    for i in st:
        if i in arr.keys():
            res += arr[i]
        else:
            res += i
    return res