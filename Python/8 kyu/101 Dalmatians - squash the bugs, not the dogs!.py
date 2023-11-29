
 """ 
Your friend has been out shopping for puppies (what a time to be alive!)... He arrives back with multiple dogs, and you simply do not know how to respond!

By repairing the function provided, you will find out exactly how you should respond, depending on the number of dogs he has.

The number of dogs will always be a number and there will always be at least 1 dog.

```agda
Good luck!
```
```r
The expected behaviour is as follows:
- Your friend has fewer than 10 dogs:                    "Hardly any"
- Your friend has at least 10 but fewer than 51 dogs:    "More than a handful!"
- Your friend has at least 51 but not exactly 101 dogs:  "Woah that's a lot of dogs!"
- Your friend has 101 dogs:                              "101 DALMATIANS!!!"

Your friend will always have between 1 and 101 dogs, inclusive.
```
 """ 

def how_many_dalmatians(n):
    dogs = ["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIONS!!!"];  
    if n <= 10:
            respond = dogs[0]
    elif n <= 50:
            respond = dogs[1]
    elif n == 101:
            respond = dogs[3] 
    else:
            respond = dogs[2]
    return respond