<?php
/*
 

DESCRIPTION  

The idea for this kata came from 9gag today:

[![The lyrics to "Never gonna give you up" by Rick Astley encoded in the NATO phonetic alphabet](https://9gag.com/photo/amrb4r9_700b.jpg)](http://9gag.com/gag/amrb4r9)

## Task 

You'll have to translate a string to Pilot's alphabet ([NATO phonetic alphabet](https://en.wikipedia.org/wiki/NATO_phonetic_alphabet)).

**Input:**

`If, you can read?`

**Output:**

`India Foxtrot , Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta ?`

**Note:**

* There are preloaded dictionary you can use, named `NATO`
* The set of used punctuation is `,.!?`.
* Punctuation should be kept in your return string, but spaces should not.
* __Xray__ should not have a dash within.
* Every word and punctuation mark should be seperated by a space ' '.
* There should be no trailing whitespace

~~~if:php
You can access the preloaded associative array using `Constants::$NATO` 
~~~

~~~if:rust
The NATO phonetic alphabet (A–Z) is preloaded:

```rust
use preloaded::NATO;

NATO[&'R']; // Romeo
NATO[&'U']; // Uniform
NATO[&'S']; // Sierra
NATO[&'T']; // Tango
```

<details>
<summary>Click to see the preloaded code</summary>

```rust
use std::collections::HashMap;
use once_cell::sync::Lazy;

#[rustfmt::skip]
pub static NATO: Lazy<HashMap<char, &'static str>> = Lazy::new(|| {
    [
        ('A', "Alfa"), ('B', "Bravo"), ('C', "Charlie"), ('D', "Delta"),
        ('E', "Echo"), ('F', "Foxtrot"), ('G', "Golf"), ('H', "Hotel"),
        ('I', "India"), ('J', "Juliett"), ('K', "Kilo"), ('L', "Lima"),
        ('M', "Mike"), ('N', "November"), ('O', "Oscar"), ('P', "Papa"),
        ('Q', "Quebec"), ('R', "Romeo"), ('S', "Sierra"), ('T', "Tango"),
        ('U', "Uniform"), ('V', "Victor"), ('W', "Whiskey"), ('X', "Xray"),
        ('Y', "Yankee"), ('Z', "Zulu"),
    ]
    .iter()
    .copied()
    .collect()       
});
```

</details>
~~~


*/

function to_nato($words){
  var_dump(Constants::$NATO);
  $letters = str_split($words);
  $res = [];
  foreach($letters as $l){
    if(array_key_exists(strtolower($l), Constants::$NATO)){
      $res[] = Constants::$NATO[strtolower($l)];
    }
    else if($l == ' '){
      $res[] = ' '; 
    }
    else{
      $res[] = $l;
    }
  }
  
  $result = implode(' ',$res);
  $result = rtrim($result);
  $result =  preg_replace('/\s{2,}/', ' ', $result);
  
  return $result;
}