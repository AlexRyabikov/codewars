<?php
/*
 

DESCRIPTION  

Create a combat function that takes the player's current health and the amount of damage recieved, and returns the player's new health.
Health can't be less than <b>0<b>.


*/

function combat($health, $damage) {
  $left = $health - $damage;
  return ($left<=0)?0:$left;
}