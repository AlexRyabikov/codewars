<?php
/*
 

DESCRIPTION  

A format for expressing an ordered list of integers is to use a comma separated list of either

* individual integers
* or a range of integers denoted by the starting integer separated from the end integer in the range by a dash, '-'. The range includes all integers in the interval including both endpoints.  It is not considered a range unless it spans at least 3 numbers. For example "12,13,15-17"

Complete the solution  so that it takes a list of integers in increasing order and returns a correctly formatted string in the range format. 

**Example:**

```javascript
solution([-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20]);
// returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```coffeescript
solution([-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20])
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```ruby
solution([-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20])
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```python
solution([-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20])
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```java
Solution.rangeExtraction(new int[] {-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20})
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```C#
RangeExtraction.Extract(new[] {-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20});
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```
```VB
RangeExtraction.Extract({-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20});
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```
```cpp
range_extraction({-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20});
// returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```
```c
range_extraction((const []){-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20}, 23);
 returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20" 
```
```nasm
nums:  dd  -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20

mov rdi, nums
mov rsi, 20
call range_extraction
; RAX <- `-10--8,-6,-3-1,3-5,7-11,14,15,17-20\0`
```
```julia
rangeextraction([-10 -9 -8 -6 -3 -2 -1 0 1 3 4 5 7 8 9 10 11 14 15 17 18 19 20])
# returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```scala
solution(List(-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20))
// "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```racket
(solution '(-10 -9 -8 -6 -3 -2 -1 0 1 3 4 5 7 8 9 10 11 14 15 17 18 19 20))
; returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

```php
solution([-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20])
// returns '-10--8,-6,-3-1,3-5,7-11,14,15,17-20'
```

```cobol
        Rangeextraction
        xs = [-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 
             14, 15, 17, 18, 19, 20]
        res = "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"
```

*Courtesy of rosettacode.org*




*/

function solution(array $list): string
{
    $result = [];
    $start = $list[0];
    $end = $list[0];
    
    for ($i = 1; $i < count($list); $i++) {
        if ($list[$i] == $list[$i - 1] + 1) {
            $end = $list[$i];
        } else {
            if ($start == $end) {
                $result[] = $start;
            } elseif ($end == $start + 1) {
                $result[] = $start;
                $result[] = $end;
            } else {
                $result[] = $start . '-' . $end;
            }
            $start = $end = $list[$i];
        }
    }
    
    if ($start == $end) {
        $result[] = $start;
    } elseif ($end == $start + 1) {
        $result[] = $start;
        $result[] = $end;
    } else {
        $result[] = $start . '-' . $end;
    }
    
    return implode(',', $result);
}