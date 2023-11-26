<?php
/*
 

DESCRIPTION  

When provided with a number between 0-9, return it in words.

Input :: 1

Output :: "One".

If your language supports it, try using a <a href="https://en.wikipedia.org/wiki/Switch_statement">switch statement</a>.


*/

function switch_it_up($number)
{
  switch ($number)
  {
  case 0:
  return "Zero";
  case 1:
  return "One";
  case 2:
  return "Two";
  case 3:
  return "Three";
  case 4:
  return "Four";
  case 5:
  return "Five";
  case 6:
  return "Six";
  case 7:
  return "Seven";
  case 8:
  return "Eight";
  case 9:
  return "Nine";
}
}