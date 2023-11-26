<?php
/*
 

DESCRIPTION  

Your task in order to complete this Kata is to write a function which formats a duration, given as a number of seconds, in a human-friendly way.

The function must accept a non-negative integer. If it is zero, it just returns `"now"`. Otherwise,  the duration is expressed as a combination of `years`, `days`, `hours`, `minutes` and `seconds`.

It is much easier to understand with an example:

```text
* For seconds = 62, your function should return 
    "1 minute and 2 seconds"
* For seconds = 3662, your function should return
    "1 hour, 1 minute and 2 seconds"
```

**For the purpose of this Kata, a year is 365 days and a day is 24 hours.**

Note that spaces are important.


### Detailed rules

The resulting expression is made of components like `4 seconds`, `1 year`, etc.  In general, a positive integer and one of the valid units of time, separated by a space. The unit of time is used in plural if the integer is greater than 1.

The components are separated by a comma and a space (`", "`). Except the last component, which is separated by `" and "`, just like it would be written in English. 

A more significant units of time will occur before than a least significant one. Therefore, `1 second and 1 year` is not correct, but `1 year and 1 second` is.

Different components have different unit of times. So there is not repeated units like in `5 seconds and 1 second`.

A component will not appear at all if its value happens to be zero.  Hence, `1 minute and 0 seconds` is not valid, but it should be just `1 minute`.

 A unit of time must be used "as much as possible". It means that the function should not return `61 seconds`, but `1 minute and 1 second` instead.  Formally, the duration specified by  of a component must not be greater than any valid more significant unit of time.



*/

function format_duration($seconds) {
  if($seconds == 0){
    return 'now';
  }
  else{
    $res = '';
    if($seconds >= 31536000){
      $years = floor($seconds/31536000);
      if($years>1){
        $res .= $years.' years, ';
      }
      else{
        $res .= $years.' year, ';
      }
      
      $seconds = $seconds - ($years*31536000);
    }
    
    if($seconds>=86400){
      $days = floor($seconds/86400);
      if($days>1){
        $res .= $days.' days, ';
      }
      else{
        $res .= $days.' day, ';
      }
      
      $seconds = $seconds - ($days*86400);
    }
    
    if($seconds>=3600){
      $hours = floor($seconds/3600);
      if($hours>1){
        $res .= $hours.' hours, ';
      }
      else{
        $res .= $hours.' hour, ';
      }
      
      $seconds = $seconds - ($hours*3600);
    }
    
    
    if($seconds>=60){
      $minutes = floor($seconds/60);
      if($minutes>1){
        $res .= $minutes.' minutes, ';
      }
      else{
        $res .= $minutes.' minute, ';
      }
      
      $seconds = $seconds - ($minutes*60);
    }
    
    if($seconds > 1){
       $res .= $seconds.' seconds';
    }
    else if($seconds == 0){
      $res .= '';
    }
    else {
      $res .= $seconds.' second';
    }
    
    $res = rtrim($res,', ');
    
    $res = preg_replace('/,([^,]*)$/', ' and\1', $res);
    
    
    return $res;
  }
}