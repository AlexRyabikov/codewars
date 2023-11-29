
 """ 
Your task is to find the nearest square number, `nearest_sq(n)` or `nearestSq(n)`, of a positive integer `n`.

For example, if `n = 111`, then `nearest\_sq(n)` (`nearestSq(n)`) equals 121, since 111 is closer to 121, the square of 11, than 100, the square of 10.

If the `n` is already the perfect square (e.g. `n = 144`, `n = 81`,  etc.), you need to just return `n`.

Good luck :)

Check my other katas:

<a href="https://www.codewars.com/kata/5a8059b1fd577709860000f6">Alphabetically ordered </a>

<a href="https://www.codewars.com/kata/5a805631ba1bb55b0c0000b8">Case-sensitive! </a>

<a href="https://www.codewars.com/kata/5a9a70cf5084d74ff90000f7">Not prime numbers </a>

<a href="https://www.codewars.com/kata/6402205dca1e64004b22b8de">Find your caterer </a>

 """ 

import math
def nearest_sq(n):
    answer = round(n**0.5)
    return answer**2