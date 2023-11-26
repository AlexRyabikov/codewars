<?php
/*
 

DESCRIPTION  

# Introduction

<pre style="white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;">
In the United Kingdom, the driving licence is the official document which authorises its holder to operate various types of motor vehicle on highways and some other roads to which the public have access. In England, Scotland and Wales they are administered by the Driver and Vehicle Licensing Agency (DVLA) and in Northern Ireland by the Driver & Vehicle Agency (DVA). A driving licence is required in the UK by any person driving a vehicle on any highway or other road defined in s.192 Road Traffic Act 1988[1] irrespective of ownership of the land over which the road passes, thus including many which allow the public to pass over private land; similar requirements apply in Northern Ireland under the Road Traffic (Northern Ireland) Order 1981. (Source <a href="https://en.wikipedia.org/wiki/Driving_licence_in_the_United_Kingdom">Wikipedia</a>)
</pre>

<center><img src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/drivinglicense.jpg" alt="Driving"></center>

# Task

<pre style="white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;">
The UK driving number is made up from the personal details of the driver. The individual letters and digits can be code using the below information
</pre>

# Rules

<pre style="white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;">
1–5: The first five characters of the surname (padded with 9s if less than 5 characters)

6: The decade digit from the year of birth (e.g. for 1987 it would be 8)

7–8: The month of birth (7th character incremented by 5 if driver is female i.e. 51–62 instead of 01–12)

9–10: The date within the month of birth

11: The year digit from the year of birth (e.g. for 1987 it would be 7)

12–13: The first two initials of the first name and middle name, padded with a 9 if no middle name

14: Arbitrary digit – usually 9, but decremented to differentiate drivers with the first 13 characters in common. We will always use 9

15–16: Two computer check digits. We will always use "AA"
</pre>

Your task is to code a UK driving license number using an Array of data. The Array will look like

```ruby
data = ["John","James","Smith","01-Jan-2000","M"]
```
```python
data = ["John","James","Smith","01-Jan-2000","M"]
```
```coffeescript
data = ["John","James","Smith","01-Jan-2000","M"]
```
```crystal
data = ["John","James","Smith","01-Jan-2000","M"]
```
```javascript
data = ["John","James","Smith","01-Jan-2000","M"];
```
```csharp
data = ["John","James","Smith","01-Jan-2000","M"];
```
```c
data = {"John","James","Smith","01-Jan-2000","M"};
```
```cpp
data = {"John","James","Smith","01-Jan-2000","M"};
```
```java
data = {"John","James","Smith","01-Jan-2000","M"};
```

Where the elements are as follows
<pre style="white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;">
0 = Forename
1 = Middle Name (if any)
2 = Surname
3 = Date of Birth (In the format Day Month Year, this could include the full Month name or just shorthand ie September or Sep)
4 = M-Male or F-Female
</pre>

You will need to output the full 16 digit driving license number.

Good luck and enjoy!

# Kata Series
If you enjoyed this, then please try one of my other Katas. Any feedback, translations and grading of beta Katas are greatly appreciated. Thank you.

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58663693b359c4a6560001d6" target="_blank">Maze Runner</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58693bbfd7da144164000d05" target="_blank">Scooby Doo Puzzle</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/7KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/586a1af1c66d18ad81000134" target="_blank">Driving License</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/586c0909c1923fdb89002031" target="_blank">Connect 4</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/586e6d4cb98de09e3800014f" target="_blank">Vending Machine</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/587136ba2eefcb92a9000027" target="_blank">Snakes and Ladders</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58a848258a6909dd35000003" target="_blank">Mastermind</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58b2c5de4cf8b90723000051" target="_blank">Guess Who?</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58f5c63f1e26ecda7e000029" target="_blank">Am I safe to drive?</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58f5c63f1e26ecda7e000029" target="_blank">Mexican Wave</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/58fdcc51b4f81a0b1e00003e" target="_blank">Pigs in a Pen</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/590300eb378a9282ba000095" target="_blank">Hungry Hippos</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/5904be220881cb68be00007d" target="_blank">Plenty of Fish in the Pond</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/590adadea658017d90000039" target="_blank">Fruit Machine</a></span>

<span style="display: flex !important;"><img style="margin:0px;" src="https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/6KYU.png" alt="Rank"/>&nbsp;<a href="https://www.codewars.com/kata/591eab1d192fe0435e000014" target="_blank">Car Park Escape</a></span>


*/

function driver($data) {
  $result = '';
  
  if(strlen($data[2])>= 5){
    $result .= substr($data[2],0,5);    
  }
  else{
    $result .= $data[2];
    $len =  strlen($data[2]);
    for($i=1;$i<=5-$len;$i++){
      $result .= 9;
    }
  }
  

  $result .= substr($data[3],-2,1);
  
  $month = [
    "Jan" => "01",
    "Feb" => "02",
    "Mar" => '03',
    'Apr' => '04',
    'May' => '05',
    'Jun' => '06',
    'Jul' => '07',
    'Aug' => '08',
    'Sep' => '09',
    'Oct' => '10',
    'Nov' => '11',
    'Dec' => '12'
  ];
  
  $mon = substr($data[3],3,3);  
  if($data[4] == 'M'){
    
    $result .= $month[$mon]; 
  }
  else{
    $result .= ''.(50 + $month[$mon]).''; 
  };
  
  $result .= substr($data[3],0,2);
  
  $result .= substr($data[3],-1);
  
  
  $result .= substr($data[0],0,1);
  
  
  if(strlen(substr($data[1],0,1))>0){
    $result .= substr($data[1],0,1); 
  }
  else{
    $result .= 9;
  }
  
  $result .= 9;
  
  $result .= 'AA';
  return strtoupper($result);
}