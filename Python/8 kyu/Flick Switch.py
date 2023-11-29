
 """ 
### Task
~~~if:python
Create a function that always returns `True` for every item in a given list.
However, if an element is the word **'flick'**, switch to always returning the opposite boolean value.
~~~
~~~if:c,rust,dart,javascript
Create a function that always returns `true` for every item in a given list.
However, if an element is the word **"flick"**, switch to always returning the opposite boolean value.
~~~

### Examples
```python
['codewars', 'flick', 'code', 'wars'] ➞ [True, False, False, False]

['flick', 'chocolate', 'adventure', 'sunshine'] ➞ [False, False, False, False]

['bicycle', 'jarmony', 'flick', 'sheep', 'flick'] ➞ [True, True, False, False, True]
```
```rust
["codewars", "flick", "code", "wars"] ➞ [true, false, false, false]

["flick", "chocolate", "adventure", "sunshine"] ➞ [false, false, false, false]

["bicycle", "jarmony", "flick", "sheep", "flick"] ➞ [true, true, false, false, true]
```
```c
{"codewars", "flick", "code", "wars"} ➞ {true, false, false, false}

{"flick", "chocolate", "adventure", "sunshine"} ➞ {false, false, false, false}

{"bicycle", "jarmony", "flick", "sheep", "flick"} ➞ {true, true, false, false, true}
```
```dart
["codewars", "flick", "code", "wars"] ➞ [true, false, false, false]

["flick", "chocolate", "adventure", "sunshine"] ➞ [false, false, false, false]

["bicycle", "jarmony", "flick", "sheep", "flick"] ➞ [true, true, false, false, true]
```

### Notes
- "flick" will always be given in lowercase.
- A list may contain multiple flicks.
- Switch the boolean value on the same element as the flick itself.

 """ 

def flick_switch(lst):
    flag = True
    result = []
    for el in lst:
        if el == 'flick':
            flag = not flag
        result.append(flag)
    return result