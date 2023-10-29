/*

DESCRIPTION:

Given a number n, return the number of positive odd numbers below n, EASY!

Examples (Input -> Output)
	7  -> 3 (because odd numbers below 7 are [1, 3, 5])
	15 -> 7 (because odd numbers below 15 are [1, 3, 5, 7, 9, 11, 13])
Expect large Inputs!
	
*/

SELECT n, n / 2 AS res 
FROM oddcount