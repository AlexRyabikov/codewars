<?php
/*
 

DESCRIPTION  

### Definition

**_Disarium number_** is the number that *The sum of its digits powered with their respective positions is equal to the number itself*.

____

### Task

**_Given_** a number, **_Find if it is Disarium or not_** . 
____

### Warm-up (Highly recommended)

### [Playing With Numbers Series](https://www.codewars.com/collections/playing-with-numbers)
___

### Notes 

* **_Number_** *passed is always*  **_Positive_** .
* **_Return_** *the result as* **_String_**
___

### Input >> Output Examples

```
disariumNumber(89) ==> return "Disarium !!"
```
#### **_Explanation_**:

* Since , **_8<sup>1</sup> + 9<sup>2</sup> = 89_** , thus *output* is `"Disarium !!"`
___

```
disariumNumber(564) ==> return "Not !!"
```
#### **_Explanation_**:

Since , **_5<sup>1</sup> + 6<sup>2</sup> + 4<sup>3</sup> = 105 != 564_** ,  thus *output* is `"Not !!"`

___
___
___

### [Playing with Numbers Series](https://www.codewars.com/collections/playing-with-numbers)

### [Playing With Lists/Arrays Series](https://www.codewars.com/collections/playing-with-lists-slash-arrays)

### [For More Enjoyable Katas](http://www.codewars.com/users/MrZizoScream/authored)
___

### ALL translations are welcomed

### Enjoy Learning !!
### Zizou



*/

function disariumNumber($n) {
  $arr = str_split($n);
  $dis = 0;
  foreach($arr as $k=>$v){
    $dis += pow($v,$k+1);
  }
  if($dis == $n){
    return "Disarium !!";
  }
  else{
    return "Not !!";
  }
}