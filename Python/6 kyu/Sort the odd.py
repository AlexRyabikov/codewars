
 """ 
## Task

You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

### Examples

```
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
```

~~~if:lambdacalc
### Encodings

purity: `LetRec`  
numEncoding: `BinaryScott`  
export constructors `nil, cons` and deconstructor `foldl` for your `List` encoding  
~~~
 """ 

def sort_array(source_array):
    odd_numbers = sorted([n for n in source_array if n%2!=0])
    c = 0
    res = []
    for i in source_array:
        if i %2!=0:
            res.append(odd_numbers[c])
            c += 1
        else:
            res.append(i)
    return res  