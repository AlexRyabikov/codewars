/*

DESCRIPTION:

Write a SELECT query which will return all prime numbers smaller than 100 in ascending order.

Your query should return one column named prime.
 
*/

SELECT t1.a AS prime
  FROM generate_series(2, 100) AS t1(a)
  WHERE NOT EXISTS (
    SELECT t2.a
    FROM generate_series(2, t1.a-1) AS t2(a)
    WHERE t1.a % t2.a = 0
    );  