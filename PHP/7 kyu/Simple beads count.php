<?php
/*
 

DESCRIPTION  

Two red beads are placed between every two blue beads. There are N blue beads. After looking at the arrangement below work out the number of red beads.
<p>
<font color="blue">@</font>
<font color="red">@</font><font color="red">@</font>
<font color="blue">@</font>
<font color="red">@</font><font color="red">@</font>
<font color="blue">@</font>
<font color="red">@</font><font color="red">@</font>
<font color="blue">@</font>
<font color="red">@</font><font color="red">@</font>
<font color="blue">@</font>
<font color="red">@</font><font color="red">@</font>
<font color="blue">@</font>  
</p>
<p>Implement <code>count_red_beads(n)</code> (in PHP <code>count_red_beads($n)</code>; in Java, Javascript, TypeScript, C, C++ <code>countRedBeads(n)</code>) so that it returns the number of <font color="red">red</font> beads.<br>
If there are less than 2 blue beads return 0.
</p>


*/

function count_red_beads(int $n): int {
  if($n < 2){
    return 0;
  } else{
    return ($n * 2) - 2;
  }
}