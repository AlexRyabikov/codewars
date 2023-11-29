
 """ 
## Find Mean

Find the mean (average) of a list of numbers in an array.

## Information

To find the mean (average) of a set of numbers add all of the numbers together and divide by the number of values in the list.

For an example list of `1, 3, 5, 7`

<span>1.</span> Add all of the numbers

```
1+3+5+7 = 16
```

<span>2.</span> Divide by the number of values in the list. In this example there are 4 numbers in the list.

```
16/4 = 4
```

<span>3.</span> The mean (or average) of this list is 4
 """ 

def find_average(nums):
    lenL = len(nums)
    if lenL == 0:
        return 0
    return sum(nums)/len(nums)