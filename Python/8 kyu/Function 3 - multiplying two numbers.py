
 """ 
````if:cobol
Implement a function called **`mult`**, which takes two numbers and returns their product:

```
call 'mult' using by content 10 20 by reference result
result = 200

call 'mult' using by content 0 758 by reference result
result = 0

call 'mult' using by content 154 99 by reference result
result = 15246
```
````

````if:csharp,go
Implement a function called **`Multiply`**, which takes two numbers and returns their product:

```
Multiply(2, 3) = 6
Multiply(0, 188) = 0
Multiply(85, 144) = 12240
```
````

````if-not:cobol, csharp, go
Implement a function called **`multiply`**, which takes two numbers and returns their product:

```
multiply(2, 3) = 6
multiply(0, 188) = 0
multiply(85, 144) = 12240
```
````

 """ 

def multiply(a,b):
    return a * b