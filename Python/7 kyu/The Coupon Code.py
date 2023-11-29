
 """ 
# Story

Your online store likes to give out coupons for special occasions. Some customers try to cheat the system by entering invalid codes or using expired coupons.

# Task

Your mission:  
Write a function called `checkCoupon` which verifies that a coupon code is valid and not expired.

A coupon is no more valid on the day **AFTER** the expiration date.  All dates will be passed as strings in this format: `"MONTH DATE, YEAR"`.

## Examples:

```javascript
checkCoupon("123", "123", "July 9, 2015", "July 9, 2015")  ===  true
checkCoupon("123", "123", "July 9, 2015", "July 2, 2015")  ===  false
```
```typescript
checkCoupon("123", "123", "July 9, 2015", "July 9, 2015")  ===  true
checkCoupon("123", "123", "July 9, 2015", "July 2, 2015")  ===  false
```
```csharp
CheckCoupon("123", "123", "July 9, 2015", "July 9, 2015")  ==  true
CheckCoupon("123", "123", "July 9, 2015", "July 2, 2015")  ==  false
```
```python
checkCoupon("123", "123", "July 9, 2015", "July 9, 2015")  == True
checkCoupon("123", "123", "July 9, 2015", "July 2, 2015")  == False
```
 """ 

from dateutil.parser import parse
def check_coupon(entered_code, correct_code, current_date, expiration_date):
    
    curr = parse(current_date)
    exp = parse(expiration_date)
    if (entered_code == correct_code) and (entered_code != 0 or correct_code != 0) and (curr.date() <= exp.date()):
        return True
    else:
        return False