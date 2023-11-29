
 """ 
Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

**Note: input will never be an empty string**

 """ 

import re
def fake_bin(x):
    res = re.sub(r"[0-4]", "0", str(x))
    resF = re.sub(r"[5-9]", "1", str(res))
    return resF