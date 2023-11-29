
 """ 
<b>[Wilson primes](https://en.wikipedia.org/wiki/Wilson_prime)</b> satisfy the following condition.
Let ```P``` represent a prime number. 

Then, 

```
((P-1)! + 1) / (P * P)
``` 

should give a whole number.

Your task is to create a function that returns ```true``` if the given number is a <b>Wilson prime</b>.

~~~if:lambdacalc
- Purity: `LetRec`
- Number Encoding: `Scott`
- Boolean Encoding: your output should be extensionally equal to a Church boolean (`True = \ x _ . x`, `False = \ _ x . x`)
~~~

 """ 

import math

def am_i_wilson(n):
    if n not in [5, 13, 563]:
        return False
    else:
        return True