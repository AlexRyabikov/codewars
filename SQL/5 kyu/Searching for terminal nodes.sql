/*

DESCRIPTION:

TASK
You will be given a table where each record represents a node in a graph. 
Each node has an outbound connection to another (but not necessarily different) node, and these connections are stored as differences between the nodes' id's.

For example, assume there're 3 rows in a table with the following data: id = 1, id = 2, id = 3. 
If the node with id = 1 has a connection to the node with id = 3, 
this connection will be represented as a number 2 (stored in the first row's step field) because the difference between their id's is 3 - 1 = 2.

It is also known that some nodes are marked as terminal,
i.e. if we were to traverse this graph, reaching such node would stop the traversal.

You have to implement a function which receives an id of a node, traverses the graph, 
and returns the id of the first encountered terminal node. On top of that, 
this function must not be recursive, and there're a few limitations in place to ensure this:

	The function name can appear only once in your code
	CREATE has to be used exactly once
	You cannot use WITH
	You cannot use EXECUTE

Notes

	There won't be any missing id's across the table rows, i.e. you can interpret step both as a difference between id's and as a difference between row_number's
	It is possible that some nodes will form loops without terminal nodes, but their id's will never be provided as input to your function
	Your solution can be at most 1000 characters long to prevent any hardcoding

*/

CREATE FUNCTION last_node(first_node int) RETURNS int AS $$
  DECLARE
    endNote INTEGER = first_node;

  BEGIN
    WHILE NOT (SELECT terminal FROM nodes WHERE id = endNote) LOOP
      SELECT id+step INTO endNote FROM nodes WHERE id = endNote;
    END LOOP;
    RETURN endNote;
  END;
  
$$ LANGUAGE PLPGSQL;
