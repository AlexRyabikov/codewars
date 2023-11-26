<?php
/*
 

DESCRIPTION  

<img src="https://i.imgur.com/ta6gv1i.png?1" title="source: imgur.com" />

The code provided is supposed return a person's **Full Name** given their ```first``` and ```last``` names.

But it's not working properly.

# Notes

The first and/or last names are never null, but may be empty.

# Task

Fix the bug so we can all go home early.



*/

class Dinglemouse {
  protected $firstName;
  protected $lastName;
  public function __construct($firstName, $lastName) {
        $this->f = $firstName;
        $this->l = $lastName;
    
  }
  
    function getFullName() {
      $result = $this->f.' '.$this->l;
      $result = trim($result);
      return $result;
  }
}