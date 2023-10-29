/*

DESCRIPTION:

Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

Note: input will never be an empty string
	
*/

SELECT x, TRANSLATE(x, '123456789', '000011111') AS res 
FROM fakebin