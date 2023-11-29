
 """ 
Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (`a, e, i, o, u`).

If they are, change the array value to a string of that vowel.

Return the resulting array.
 """ 

def is_vow(inp):
    l = []
    for i in inp:
        if i == 117:
            l.append('u')
        elif i == 97:
            l.append('a')
        elif i == 101:
            l.append('e')
        elif i == 105:
            l.append('i')
        elif i == 111:
            l.append('o')
        else:
            l.append(i)
    return l