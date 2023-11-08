/*

DESCRIPTION:

Task
Given the database where users are stored in JSON format, fetch the records splitting the data into separate columns.

Notes
The private field determines whether the user's email address should be publicly visible
If the profile is private, email_address should equal "Hidden"
The users may have multiple email addresses
If no email addresses are provided, email_address should equal "None"
If there're multiple email addresses, the first one should be shown
The date_of_birth is in the yyyy-mm-dd format
The age fields represents the user's age in years
Order the result by the first_name, and last_name columns
Input table
-------------------------
| Table | Column | Type |
|-------+--------+------|
| users | id     | int  |
|       | data   | json |
-------------------------
JSON object format
--------------------------------------
|     Field       |       Type       |
|-----------------+------------------|
| first_name      | string           |
| last_name       | string           |
| date_of_birth   | string           |
| email_addresses | array of strings |
| private         | boolean          |
--------------------------------------
Output table
------------------------
|    Column     | Type |
|---------------+------|
| first_name    | text |
| last_name     | text |
| age           | int  |
| email_address | text |
------------------------
 
*/

SELECT 
  data->>'first_name' AS first_name,
  data->>'last_name' AS last_name,
  extract(year from age(now(), (data->>'date_of_birth')::date))::integer AS age,
  CASE
    WHEN data->>'private' = 'true' THEN 'Hidden'
    WHEN data->>'private' = 'false' and data#>>'{email_addresses, 0}' is null THEN 'None'
    else data#>>'{email_addresses, 0}'
  END AS email_address
FROM users
ORDER BY first_name, last_name