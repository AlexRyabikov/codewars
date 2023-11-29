
 """ 
write me a function `stringy` that takes a `size` and returns a `string` of alternating `1`s and `0`s.

the string should start with a `1`.

a string with `size` 6 should return :`'101010'`.

with `size` 4 should return : `'1010'`.

with `size` 12 should return : `'101010101010'`.

The size will always be positive and will only use whole numbers.


 """ 

def stringy(size):
    str = ""
    for i in range(0,size,1):
        if (i % 2) == 0:
            str = str + "1"
        else:
            str = str + "0"
    return str