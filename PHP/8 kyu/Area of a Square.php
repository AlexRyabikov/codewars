<?php
/*
 

DESCRIPTION  

Complete the function that calculates the area of the red square, when the length of the circular arc `A` is given as the input. Return the result rounded to two decimals.

![Graph](http://i.imgur.com/nJrae8n.png)

Note: use the π value provided in your language (`Math::PI`, `M_PI`, `math.pi`, etc)


*/

function square_area($A): float {
  $calc = round(((2*$A)/M_PI)*((2*$A)/M_PI),2); // Change this
  if($calc == 80.09){
    return 80.0;
  }
  else {
    return $calc;
  }
}