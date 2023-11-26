<?php
/*
 

DESCRIPTION  

Write a function that checks if a given string (case insensitive) is a [palindrome](https://en.wikipedia.org/wiki/Palindrome). 

A palindrome is a word, number, phrase, or other sequence of symbols that reads the same backwards as forwards, such as `madam` or `racecar`.


*/

function isPalindrome(string $str): bool {
  $str = strtolower($str);
  if($str == strrev($str)) {
    return 1;
  }
  else {
    return 0;
  }
}