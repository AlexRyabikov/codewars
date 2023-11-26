<?php
/*
 

DESCRIPTION  

Write function bmi that calculates body mass index (bmi = weight / height<sup>2</sup>).


if bmi <= 18.5 return "Underweight"

if bmi <= 25.0 return "Normal"

if bmi <= 30.0 return "Overweight"

if bmi > 30 return "Obese"


*/

function bmi($weight, $height) {
  $bmi = $weight / pow($height,2);
  switch(true){
    case ($bmi <= 18.5):
      return "Underweight";
    case ($bmi <= 25.0):
      return "Normal";    
    case ($bmi <= 30.0):
      return "Overweight";  
    case ($bmi > 30.0):
      return "Obese";      
  }
}