<?php
/*
 

DESCRIPTION  

```if:python,php
In this kata you will have to write a function that takes `litres` and `price_per_litre` (**in dollar**) as arguments. 
```

```if:csharp,java,javascript
In this kata you will have to write a function that takes `litres` and `pricePerLitre` (**in dollar**) as arguments. 
```
Purchases of 2 or more litres get a discount of 5 cents per litre, purchases of 4 or more litres get a discount of 10 cents per litre, and so on every two litres, up to a maximum discount of 25 cents per litre. But total discount per litre cannot be more than 25 cents. Return the total cost rounded to 2 decimal places. Also you can guess that there will not be negative or non-numeric inputs.

Good Luck!


## Note

1 Dollar = 100 Cents


*/

function fuel_price($litres, $price_per_litre) {
  $cents = $price_per_litre * 100;
  switch(true){
    case $litres >= 2 and $litres < 4:
      $cents = $cents - 5;
      break;
    case $litres >= 4  and $litres < 6:
      $cents = $cents - 10;
      break;
    case $litres >= 6  and $litres < 8:
      $cents = $cents - 15;
      break;
    case $litres >= 8  and $litres < 10:
      $cents = $cents - 20;
      break;
    case $litres >= 10:
      $cents = $cents - 25;
      break;
  }
  $cost = ($litres * $cents) / 100;
  return round($cost,2);
}