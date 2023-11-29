
 """ 
This series of katas will introduce you to basics of doing geometry with computers.


~~~if:csharp
`Point` objects have fields `X` and `Y`.
~~~
~~~if-not:csharp
`Point` objects have attributes `x` and `y`.
~~~

Write a function calculating distance between `Point a` and `Point b`.

Input coordinates fit in range `$ -50 \leqslant x,y \leqslant 50 $`. Tests compare expected result and actual answer with tolerance of `1e-6`.
 """ 

def distance_between_points(a, b):
    return ((b.x - a.x) ** 2 + (b.y - a.y) ** 2) ** 0.5