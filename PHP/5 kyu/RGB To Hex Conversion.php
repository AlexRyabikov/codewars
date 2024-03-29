<?php
/*
 

DESCRIPTION  

The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

### Examples (input --> output):
```
255, 255, 255 --> "FFFFFF"
255, 255, 300 --> "FFFFFF"
0, 0, 0       --> "000000"
148, 0, 211   --> "9400D3"
```


*/

function rgb($r,$g,$b){
    
    $r = max(0, min(255, $r));
    $g = max(0, min(255, $g));
    $b = max(0, min(255, $b));

    
    $hexR = str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
    $hexG = str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
    $hexB = str_pad(dechex($b), 2, "0", STR_PAD_LEFT);

    
    $result = $hexR . $hexG . $hexB;

    return strtoupper($result); // Convert to uppercase for consistency
}