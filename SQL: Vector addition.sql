/* Vector addition
Task
You have to do some SQL magic, so that it is possible to do vector addition on int[] arrays (i.e. perform pairwise addition: 
a + b = {a[1] + b[1], a[2] + b[2], ..., a[n] + b[n]}) using the + operator. 
The resulting array should have the same length as the shortest of the inputs.
*/
create function adda(a int[],b int[]) returns int[] language'plpgsql' as $$
begin
  return (select array(select x+y from unnest(a,b) as t(x,y) where x+y is not null));
end;
$$
;

create operator + (procedure=adda,leftarg=int[],rightarg=int[],commutator=operator(+))
