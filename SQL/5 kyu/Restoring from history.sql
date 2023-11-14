/*

DESCRIPTION:

Given a table which holds information about the users' attempts to change their nicknames, you have to determine their final nicknames. An attempt may be unsuccessful if the provided nickname is currently used by another user, in which case nothing should happen. Otherwise, the nickname is successfully changed.

Notes
The id field of the input table should be used for relative ordering of the attempts
The user's first attempt to set their nickname is always successful
Sort the result by user_id
Input table
-----------------------------
|  Table   | Column  | Type |
|----------+---------+------|
| attempts | id      | int  |
|          | user_id | int  |
|          | name    | text |
-----------------------------
Output table
------------------
| Column  | Type |
|---------+------|
| user_id | int  |
| name    | text |
------------------
Example
User 1 registers with the nickname "a"
User 2 registers with the nickname "b"
User 1 tries to change their nickname to "b" - nothing happens
User 2 tries to change their nickname to "c" - success
Result
User 1 has nickname "a"
User 2 has nickname "c"

*/

with
  src as (
    select 
      id, 
      user_id,
      name,
      row_number() over (partition by user_id order by id) as attempt_no,
      lead(id) over (partition by user_id order by id) as next_attempt_id
      from attempts
      order by id),
  successful_attempts as (
    select 
      a.*,
      row_number() over (partition by user_id order by id desc) as attempt_no_desc
      from src a
      where not exists(
        select 
          from src b 
          where b.name = a.name 
            and b.id < a.id 
            and b.user_id <> a.user_id
            and (b.next_attempt_id is null or b.next_attempt_id > a.id))
        or attempt_no = 1)
select 
  user_id,
  name
  from successful_attempts
  where attempt_no_desc = 1
  order by user_id