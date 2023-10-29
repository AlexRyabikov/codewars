/*

DESCRIPTION:

Write a function that checks if a given string (case insensitive) is a palindrome.

A palindrome is a word, number, phrase, or other sequence of symbols that reads the same backwards as forwards, such as madam or racecar.

	
*/

SELECT str, REVERSE(UPPER(str)) = UPPER(str) AS res 
FROM ispalindrome