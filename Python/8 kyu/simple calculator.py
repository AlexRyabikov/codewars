
 """ 
You are required to create a simple calculator that returns the result of addition, subtraction, multiplication or division of two numbers.

Your function will accept three arguments:<br>
The first and second argument should be numbers.<br>
The third argument should represent a sign indicating the operation to perform on these two numbers.
```if-not:csharp
if the variables are not numbers or the sign does not belong to the list above a message "unknown value" must be returned.
```
```if:csharp
If the sign is not a valid sign, throw an ArgumentException.
```

# Example:

```javascript
calculator(1,2,"+"); //=> result will be 3
calculator(1,2,"&"); //=> result will be "unknown value"
calculator(1,"k","*"); //=> result will be "unknown value"
```
```php
calculator(1, 2, "+"); // 3
calculator(1, 2, "&"); // "unknown value"
calculator(1, "k", "*"); // "unknown value"
```
```csharp
Kata.Calculator(1, 2, '+') => 3
Kata.Calculator(1, 2, '$') // throws ArgumentException
```
```python
calculator(1, 2, '+') => 3
calculator(1, 2, '$') # result will be "unknown value"
```

Good luck!
 """ 

def calculator(x,y,op):
    oper = ['+','-','*','/'];
    if not op in oper:
        return "unknown value";
    elif isinstance(x, str) or isinstance(y, str):
        return "unknown value";
    else:
        if op == '*':
            return x * y
        elif op == '+':
            return x + y
        elif op == '-':
            return x - y
        elif op == '/':
            return x / y