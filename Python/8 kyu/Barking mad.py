
 """ 
Teach snoopy and scooby doo how to bark using object methods. 
Currently only snoopy can bark and not scooby doo. 

```javascript
snoopy.bark(); // return "Woof"
scoobydoo.bark(); // undefined
```
```python
snoopy.bark() #return "Woof"
scoobydoo.bark() #undefined
```
```ruby
snoopy.bark() #return "Woof"
scoobydoo.bark() #doesn't work yet
```
Use method prototypes to enable all Dogs to bark. 
 """ 

class Dog ():
    def __init__(self, breed):
        self.breed = breed
    
    def bark(self):
        return "Woof"
    

snoopy = Dog("Beagle")

snoopy.bark = lambda: "Woof"

scoobydoo = Dog("Great Dane")