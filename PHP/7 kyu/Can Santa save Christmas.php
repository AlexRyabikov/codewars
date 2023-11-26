<?php
/*
 

DESCRIPTION  

# Can Santa save Christmas?

Oh no! Santa's little elves are sick this year. He has to distribute the presents on his own.

But he has only 24 hours left. Can he do it?

## Your Task:

You will get an array as input with time durations as string in the following format: `HH:MM:SS`. Each duration represents the time taken by Santa to deliver a present. Determine whether he can do it in 24 hours or not.
In case the time required to deliver all of the presents is exactly 24 hours, Santa can complete the delivery ;-) .
___

If this kata was to easy for you. Try the [harder one](https://www.codewars.com/kata/christmas-present-calculator).

### This kata is part of the Collection "Date fundamentals":

* [#1 Count the Days!](https://www.codewars.com/kata/count-the-days/javascript)
* [#2 Minutes to Midnight](https://www.codewars.com/kata/minutes-to-midnight)
* #3 Can Santa save Christmas?
* [#4 Christmas Present Calculator](https://www.codewars.com/kata/christmas-present-calculator)







*/

function determine_time(array $durations): bool {
  $sec = 0;
  if(!empty($durations)) {
  foreach($durations as $r){
    $parsed = date_parse($r);
    $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
    $sec += $seconds;
  }
  if($sec <= 86400){
    return true;
  }
  else{
    return false;
  }
  }
  else{
    return true;
  }

}