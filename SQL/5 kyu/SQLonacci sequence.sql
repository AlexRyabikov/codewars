/*

DESCRIPTION:

Yes it's Fibonacci yet again ! But this time it's SQL.

You need to create a select statement which will produce first 90 Fibonnacci numbers. The column name is - number

Fibbonaccii sequence is:

 0, 1, 1, 2, 3, 5, 8, 13, ..., 89, 144, 233, 377, ...
where

f(0) = 0
f(1) = 1
...
f(n) = f(n-1) + f(n-2)
Have fun!
  
*/

WITH RECURSIVE fib(number,n2) AS (
      SELECT 0::bigint,1::bigint
    UNION ALL
      SELECT n2::bigint,number+n2::bigint 
      FROM fib
)
SELECT number FROM fib LIMIT 90