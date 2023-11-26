<?php
/*
 

DESCRIPTION  

Define a function that takes an integer argument and returns a logical value `true` or `false` depending on if the integer is a prime.

Per Wikipedia, a prime number ( or a prime ) is a natural number greater than `1` that has no positive divisors other than `1` and itself.

## Requirements

* You can assume you will be given an integer input.
* You can not assume that the integer will be only positive. You may be given negative numbers as well ( or `0` ).
* **NOTE on performance**: There are no fancy optimizations required, but still _the_ most trivial solutions might time out. Numbers go up to 2^31 ( or similar, depending on language ). Looping all the way up to `n`, or `n/2`, will be too slow.

## Example

```c
is_prime(1)   false 
is_prime(2)   true  
is_prime(-1)  false 
```
```nasm    
mov edi, 1
call is_prime    ; EAX <- 0 (false)

mov edi, 2
call is_prime    ; EAX <- 1 (true)

mov edi, -1
call is_prime    ; EAX <- 0 (false)
```
```c++
bool isPrime(5) = return true
```
```d
bool isPrime(5) = return true
```
```pascal
IsPrime(1) = false
IsPrime(2) = true
IsPrime(-1) = false
```
```perl
is_prime(1)  # 0
is_prime(2)  # 1
is_prime(-1) # 0
```
```lambdacalc
is-prime 1 -> False
is-prime 2 -> True
```

~~~if:lambdacalc
## Encodings

purity: `LetRec`  
numEncoding: `BinaryScott` ( so, no negative numbers )  
export deconstructor `if` for your `Boolean` encoding  
~~~



*/

function is_prime(int $n): bool {
    if ($n <= 1) {
        return false;
    }
    
    if ($n <= 3) {
        return true;
    }

    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $n) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    
    return true;
}