<?php
/*
 

DESCRIPTION  

Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (`HH:MM:SS`)

* `HH` = hours, padded to 2 digits, range: 00 - 99
* `MM` = minutes, padded to 2 digits, range: 00 - 59
* `SS` = seconds, padded to 2 digits, range: 00 - 59

The maximum time never exceeds 359999 (`99:59:59`)

You can find some examples in the test fixtures.


*/

function human_readable($seconds) {
 if($seconds == 0){
   return '00:00:00';
 }
 else{
   $hours = 0;
   $min = 0;
   $smin = '';
   $shours = '';
   $sec = '';
   if($seconds >= 3600){
     $hours = floor($seconds/3600);
     if($hours == 0){
     $shours .= '00:';
     }
     if($hours < 10) {
       $shours .= '0'.$hours.':';
     }
     else{
       $shours .= $hours.':';
     }
     
     $seconds = $seconds - ($hours*3600);
   }
   
    if($seconds >= 60){
     $min = floor($seconds/60);
      if($min == 0){
      $smin .= '00:';
      }
      if($min < 10) {
       $smin .= '0'.$min.':';
     }
      else{
        $smin .= $min.':';
      }
      
     $seconds = $seconds - ($min*60);
   }
   
   if($seconds == 0){
     $sec .= '00';
   }
   else if($seconds < 10){
     $sec.= '0'.$seconds;
   }
   else{
     $sec .= $seconds;
   }
   
    if($hours == 0){
      $shours = "00:";
    }
    if($min == 0){
      $smin = "00:";
    }
    if($seconds == 0){
      $sec = "00";
    }


   return $shours.$smin.$sec;
 }
}