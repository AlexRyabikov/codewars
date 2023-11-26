<?php
/*
 

DESCRIPTION  

Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

**Note: input will never be an empty string**



*/

function fake_bin(string $s): string {
 $s = preg_replace('/[0-4]/', '0', $s);
 $s = preg_replace('/[5-9]/', '1', $s);
 return $s;
}