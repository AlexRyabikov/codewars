
 """ 
Return the number (count) of vowels in the given string. 

We will consider `a`, `e`, `i`, `o`, `u` as vowels for this Kata (but not `y`).

The input string will only consist of lower case letters and/or spaces.

 """ 

def get_count(sentence):
    count = 0
    vovArr = ["a","e","i","o","u"]
    for c in sentence:
        if c in vovArr:
            count = count + 1
    return count