/*

DESCRIPTION:

You have access to two tables named top_half and bottom_half, as follows:

top_half schema

id
heads
arms
bottom_half schema

id
legs
tails
You must return a table with the format as follows:

output schema

id
heads
legs
arms
tails
species
The IDs on the tables match to make a full monster. For heads, arms, legs and tails you need to draw in the data from each table.

For the species, if the monster has more heads than arms, more tails than legs, or both, it is a 'BEAST' else it is a 'WEIRDO'. This needs to be captured in the species column.

All rows should be returned (10).

Tests require the use of CASE. Order by species.

Please use pure SQL, only testing is done in Ruby.
 
*/

/*  SQL  */
SELECT
s1.id id,
s1.heads heads,
s2.legs legs,
s1.arms arms,
s2.tails tails,
(CASE WHEN (s1.heads > s1.arms) 
           OR (s2.tails > s2.legs) 
           THEN 'BEAST' ELSE 'WEIRDO' END) 
AS species
FROM
top_half s1
JOIN bottom_half s2
ON s1.id = s2.id
ORDER BY species
LIMIT 10