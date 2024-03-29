/*

DESCRIPTION:

For this challenge you need to create a simple SELECT statement that will return all columns from the products table, and join to the companies table so that you can return the company name.

products table schema
	id
	name
	isbn
	company_id
	price

companies table schema
	id
	name

You should return all product fields as well as the company name as "company_name".

NOTE: Your solution should use pure SQL. Ruby is used within the test cases to do the actual testing.

*/

SELECT 
s1.id,
s1.name,
s1.isbn,
s1.company_id,
s1.price,
s2.name AS company_name
FROM products AS s1
LEFT JOIN companies AS s2
ON 
s2.id = s1.company_id