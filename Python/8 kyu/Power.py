
 """ 
The goal is to create a function of two inputs `number` and `power`, that "raises" the `number` up to `power` (*ie* multiplies `number` by itself `power` times).

### Examples
```javascript
numberToPower(3, 2)  // -> 9 ( = 3 * 3 )
numberToPower(2, 3)  // -> 8 ( = 2 * 2 * 2 )
numberToPower(10, 6) // -> 1000000
```
```python
number_to_pwr(3, 2)  # -> 9 ( = 3 * 3 )
number_to_pwr(2, 3)  # -> 8 ( = 2 * 2 * 2 )
number_to_pwr(10, 6) # -> 1000000
```

~~~if:javascript
**Note**: `Math.pow` and some other `Math` functions like `eval()` and `**` are disabled.
~~~
~~~if:python
**Note**: `math.pow` and some others `math` functions are disabled on final tests.
~~~
 """ 

def number_to_pwr(n, p): 
    result = 1
    for _ in range(p):
        result *= n
    return result