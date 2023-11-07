/*

DESCRIPTION:

You have access to a table of monsters as follows:

** monsters table schema **

id
name
legs
arms
characteristics
Your task is to make a new table where each column should contain the length of the string in the column to its right (last column should contain length of string in the first column). Remember some column values are not currently strings. Column order and titles should remain unchanged:

** output table schema **

id
name
legs
arms
characteristics

*/

SELECT
char_length(name::text) AS id,
char_length(legs::text) AS name,
char_length(arms::text) AS legs,
char_length(characteristics::text) AS arms,
char_length(id::text) AS characteristics
FROM
monsters