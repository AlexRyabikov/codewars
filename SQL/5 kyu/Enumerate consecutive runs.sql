/*

DESCRIPTION:

Task
Given a table with some arbitrary entries having id and value columns, enumerate the runs of rows which have consecutive id's and the same value. The runs' indices should be stored in the run_id column of the output table; the indices themselves should be consecutive and start from 1.

Notes
id and value columns in the output are the same as in the input table
Order the result by the id column
Input table
---------------------------
|  Table  | Column | Type |
|---------+--------+------|
| entries | id     | int  |
|         | value  | int  |
---------------------------
Output table
-----------------
| Column | Type |
|--------+------|
| id     | int  |
| value  | int  |
| run_id | int  |
-----------------
Enumeration example
 id | value    run_id
====+=================
  1 |   7         1
  2 |   7         1
----+-----------------
  3 |   0         2
----+-----------------
  5 |   0         3
----+-----------------
  6 |  -5         4
----+-----------------
  7 |   7         5
  8 |   7         5
  9 |   7         5
  
*/

SELECT id,
       value,
       sum(CASE WHEN change THEN 1 ELSE 0 END) OVER (ORDER BY id) as run_id
FROM (
         SELECT id,
                value,
-- if next value changed: then (TRUE) consecutive break
                (value <> LAG(value, 1, 1) OVER (ORDER BY id))
-- if next id missed: then (TRUE) consecutive break
             OR ((id - 1) <> LAG(id) OVER (ORDER BY id)) AS change
         FROM entries) as sub;