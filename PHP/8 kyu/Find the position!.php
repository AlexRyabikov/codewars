<?php
/*
 

DESCRIPTION  

When provided with a letter, return its position in the alphabet.

Input :: "a"

Ouput :: "Position of alphabet: 1"



*/

function position(string $alphabet): string 
{
  return "Position of alphabet: ".ord(strtoupper($alphabet)) - ord('A') + 1;
}