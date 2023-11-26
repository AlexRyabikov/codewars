<?php
/*
 

DESCRIPTION  

```if-not:julia,racket,elixir
Write a function that returns the total surface area and volume of a box as an array: `[area, volume]`
```
```if:julia
Write a function that returns the total surface area and volume of a box as a tuple: `(area, volume)`
```
```if:racket
Write a function that returns the total surface area and volume of a box as a list: `(area, volume)`
```
```if:elixir
Write a function that returns the total surface area and volume of a box as a list: `{area, volume}`
```



*/

function getSize($width, $height, $depth) {
  $arrVol = [(2*$width*$height)+(2*$width*$depth)+(2*$height*$depth),($width*$height*$depth)];
  return $arrVol;
}