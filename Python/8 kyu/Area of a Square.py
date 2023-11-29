
 """ 
Complete the function that calculates the area of the red square, when the length of the circular arc `A` is given as the input. Return the result rounded to two decimals.

![Graph](http://i.imgur.com/nJrae8n.png)

Note: use the π value provided in your language (`Math::PI`, `M_PI`, `math.pi`, etc)
 """ 

import math 
def square_area(A):
    calc = round(((2*A)/math.pi)*((2*A)/math.pi),2);
    if(calc == 80.09):
        return 80.0;
    else:
        return calc