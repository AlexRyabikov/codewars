/*

DESCRIPTION:

This kata is inspired by SQL Basics: Simple PIVOTING data by matt c.

You need to build a pivot table WITHOUT using CROSSTAB function. Having two tables products and details you need to select a pivot table of products with counts of details occurrences (possible details values are ['good', 'ok', 'bad'].

Results should be ordered by product's name.

Model schema for the kata is:

schema

your query should return table with next columns

name
good
ok
bad
Compare your table to the expected table to view the expected results.
 
*/

-- add your query here!
SELECT
s1.name AS name,
  SUM(CASE WHEN s2.detail = 'good' THEN 1 ELSE 0 END) AS good,
  SUM(CASE WHEN s2.detail = 'ok' THEN 1 ELSE 0 END) AS ok,
  SUM(CASE WHEN s2.detail = 'bad' THEN 1 ELSE 0 END) AS bad
FROM
products s1
LEFT JOIN details s2 
ON s1.id = s2.product_id
GROUP BY s1.name
ORDER BY s1.name