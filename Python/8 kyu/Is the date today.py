
 """ 
Write a simple function that takes a `Date` as a parameter and returns a `Boolean` representing whether the date is today or not.

Make sure that your function does not return a false positive by only checking the day.
 """ 

from datetime import datetime

def is_today(date): 
    if date.strftime('%Y.%m.%d') == datetime.now().strftime('%Y.%m.%d'):
        return True
    else:
        return False