
 """ 
Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.

 """ 

def find_short(s):
    listRes = list(s.split(" "))
    l = len(min(listRes,key=len))
    return l # l: shortest word length