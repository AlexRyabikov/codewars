
 """ 
# Triple Trouble

Create a function that will return a string that combines all of the letters of the three inputed strings in groups.  Taking the first letter of all of the inputs and grouping them next to each other.  Do this for every letter, see example below!

**E.g. Input: "aa", "bb" , "cc" => Output: "abcabc"** 

*Note: You can expect all of the inputs to be the same length.*

 """ 

def triple_trouble(one, two, three):
    l = len(one);
    str = '';
    i = 0;
    while(i<=l):
        str += one[i:i+1] + two[i:i+1] + three[i:i+1] 
        i += 1
    return str;