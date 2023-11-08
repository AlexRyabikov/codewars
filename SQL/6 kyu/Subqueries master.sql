/*

DESCRIPTION:

The objective of this Kata is to show that you are proficient at string manipulation (and perhaps that you can use extensively subqueries).

You will use people table but will focus solely on the name column

name
Greyson Tate Lebsack Jr.
Elmore Clementina O'Conner
you will be provided with a full name and you have to return the name in columns as follows.

name	first_lastname	second_lastname
Greyson Tate	Lebsack	Jr.
Elmore	Clementina	O'Conner

Note: Don't forget to remove spaces around names in your result.
Note: Due to multicultural context, if full name has more than 3 words, consider the last 2 as first_lastname and second_lastname, all other names belonging to name.

 
*/

select 
(case when sub_query.test='' then sub_query.name else concat(sub_query.name,
' ', sub_query.first_lastname) end) as name,
(case when sub_query.test='' then sub_query.first_lastname else 
 sub_query.second_lastname end) as first_lastname,
 (case when sub_query.test='' then sub_query.second_lastname else
 test end) as second_lastname
 from
 (select split_part(name, ' ', 1) as name, 
         split_part(name, ' ', 2) as first_lastname,
         split_part(name, ' ', 3) as second_lastname,
         split_part(name, ' ', 4) as test
         from people) as sub_query;