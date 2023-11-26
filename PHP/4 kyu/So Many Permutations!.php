<?php
/*
 

DESCRIPTION  

In this kata, your task is to create all permutations of a non-empty input string and remove duplicates, if present. 

Create as many "shufflings" as you can!

Examples:
```
With input 'a':
Your function should return: ['a']

With input 'ab':
Your function should return ['ab', 'ba']

With input 'abc':
Your function should return ['abc','acb','bac','bca','cab','cba']

With input 'aabb':
Your function should return ['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa']
```

Note: The order of the permutations doesn't matter.

Good luck!





*/

function permutations(string $string): array {
    $result = [];
    //if one letter
    if (strlen($string) <= 1) {
        return [$string];
    } 
    //if more than one letter
    else {
        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];
            $remainingChars = substr($string, 0, $i) . substr($string, $i + 1);
            $subPermutations = permutations($remainingChars);
            foreach ($subPermutations as $subPermutation) {
                $result[] = $char . $subPermutation;
            }
        }
    }
    return array_unique($result);
}