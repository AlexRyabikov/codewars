
 """ 
Jack really likes his number five: the trick here is that you have to multiply each number by 5 raised to the number of digits of each numbers, so, for example:
```javascript
multiply(3)==15 // 3 * 5¹
multiply(10)==250 // 10 * 5²
multiply(200)==25000 // 200 * 5³
multiply(0)==0 // 0 * 5¹
multiply(-3)==-15 // -3 * 5¹
```
```python
multiply(3)==15 # 3 * 5¹
multiply(10)==250 # 10 * 5²
multiply(200)==25000 # 200 * 5³
multiply(0)==0 # 0 * 5¹
multiply(-3)==-15 # -3 * 5¹
```
```ruby
multiply(3)==15 # 3 * 5¹
multiply(10)==250 # 10 * 5²
multiply(200)==25000 # 200 * 5³
multiply(0)==0 # 0 * 5¹
multiply(-3)==-15 # -3 * 5¹
```
```haskell
multiply   3  `shouldBe`    15 --  3 * 5¹
multiply  10  `shouldBe`   250 --  10 * 5²
multiply 200  `shouldBe` 25000 --  200 * 5³
multiply   0  `shouldBe`     0 --  0 * 5¹
multiply (-3) `shouldBe`  (-15)-- -3 * 5¹
```
 """ 

def multiply(n):
    l = len(str(abs(n)))
    res = n * (5 ** l)
    return res