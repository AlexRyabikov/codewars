
 """ 
In this kata you should simply determine, whether a given year is a leap year or not. In case you don't know the rules, here they are:

* Years divisible by 4 are leap years,
* but years divisible by 100 are **not** leap years,
* but years divisible by 400 are leap years.

Tested years are in range `1600 ≤ year ≤ 4000`.

~~~if:shell
Echo out `1` if year passed in is a leap year, or `0` otherwise.
~~~

 """ 

def is_leap_year(y):
    if y % 100 == 0  and y % 400 !=0:
        return False
    elif y % 100 != 0 and y % 400 == 0:
        return True
    elif y % 4 == 0:
        return True
    else:
        return False