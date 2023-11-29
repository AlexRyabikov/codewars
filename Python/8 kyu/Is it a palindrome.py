
 """ 
Write a function that checks if a given string (case insensitive) is a [palindrome](https://en.wikipedia.org/wiki/Palindrome). 

A palindrome is a word, number, phrase, or other sequence of symbols that reads the same backwards as forwards, such as `madam` or `racecar`.
 """ 

def is_palindrome(s):
    s = s.lower()
    if s == s[::-1]:
        return True
    else:
        return False