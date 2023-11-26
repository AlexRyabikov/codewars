<?php
/*
 

DESCRIPTION  

# 7 Wonders
[7 Wonders](https://en.wikipedia.org/wiki/7_Wonders_(board_game)) is a board game that consists of building your city, gathering resources and fighting your neighbors.

One part of the game is also to research science in order to gain points at the end of the game.
There are 3 types of science glyphs you can gather:
+ Compasses
+ Gears
+ Tablets

The way points are added up works as described here:


### Step 1

Each **distinct set of three different glyphs** is worth 7 points:

```
1 Compass, 1 Gear and 1 Tablet    =  7 points
2 Compasses, 1 Gear and 1 Tablet  =  7 points (because it's just one disctinct set)
```

Note that a **distinct set of three different glyphs** means 1 Compass, 1 Gear and 1 Tablet. No more, no less!


### Step 2

The amount of each glyph you own is **squared** and then **summed up**:
```
1 Compass, 1 Gear and 1 Tablet    =  1*1 + 1*1 + 1*1  =  3 points
2 Compasses, 1 Gear and 1 Tablet  =  2*2 + 1*1 + 1*1  =  6 points
```


### Finally

The total science points is equal to the sum of the two steps:
```
1 Compass, 1 Gear and 1 Tablet    =  7 + 3  =  10 points
2 Compasses, 1 Gear and 1 Tablet  =  7 + 6  =  13 points
```

You will be given 3 inputs corresponding to the amount of each glyph you have acquired in the game. Your task is to output the final score.
Take into account that you may have no glyphs at all!



*/

// Calculate how many points you would make in 7 Wonders from these science cards!
function sevenWondersScience($compasses, $gears, $tablets){
  $min = min($compasses, $gears, $tablets);
  if($compasses>1 and $gears>1 and $tablets>1){
      $step1 = 7*$min;
  }
  else if($compasses<1 or $gears<1 or $tablets<1) {
    $step1 = 0;
  }
  else {
    $step1 = 7;
  }

  $step2 = ($compasses*$compasses) + ($gears*$gears) + ($tablets*$tablets);
  return $step1+$step2;
}