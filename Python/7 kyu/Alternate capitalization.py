
 """ 
Given a string, capitalize the letters that occupy even indexes and odd indexes separately, and return as shown below. Index `0` will be considered even.

For example, `capitalize("abcdef") = ['AbCdEf', 'aBcDeF']`. See test cases for more examples.

The input will be a lowercase string with no spaces.

Good luck!

If you like this Kata, please try: 

[Indexed capitalization](https://www.codewars.com/kata/59cfc09a86a6fdf6df0000f1)

[Even-odd disparity](https://www.codewars.com/kata/59c62f1bdcc40560a2000060)
 """ 

def capitalize(s):
    s1 = ''
    s2 = ''
    
    l = len(s)
    
    for i in range(l):
        if i % 2 == 0:
            s1 += s[i].upper()
            s2 += s[i].lower()
        else:
            s1 += s[i].lower()
            s2 += s[i].upper()
    return [s1,s2]