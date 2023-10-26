/*

DESCRIPTION:

This kata has been retired from codewars...

Do you know recursion?
This is a kata series that you can only solve using recursion.
##1 - Factorial

In mathematics, the factorial of a non-negative integer n, denoted by n!, is the product of all positive integers less
than or equal to n. For example,

5! = 5 * 4 * 3 * 2 * 1 = 120.

The value of 0! is 1.

#Your task

You have to create the function factorial that receives n and returns n!. You have to use recursion.

*/

WITH RECURSIVE f(n, fact) AS (
  SELECT 0, 1::bigint
  UNION all
  SELECT n + 1, fact * (n + 1)
  FROM f
)
SELECT n, fact
FROM f
LIMIT 17
