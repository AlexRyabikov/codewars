<?php
/*
 

DESCRIPTION  

Your task in this kata is to implement a function that calculates the sum of the integers inside a string. For example, in the string <code>"The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog"</code>, the sum of the integers is <code>3635</code>.

*Note: only positive integers will be tested.*


*/

function sum_of_integers_in_string(string $s): int {
$sum = 0;
preg_match_all('!\d+!', $s, $matches);

  return array_sum($matches[0]);
}