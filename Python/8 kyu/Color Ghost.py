
 """ 
### Color Ghost
Create a class Ghost

Ghost objects are instantiated without any arguments.

Ghost objects are given a random color attribute of "white" or "yellow" or "purple" or "red" when instantiated

```javascript
ghost = new Ghost();
ghost.color //=> "white" or "yellow" or "purple" or "red"
```
```coffeescript
ghost = new Ghost()
ghost.color #=> "white" or "yellow" or "purple" or "red"
```
```ruby
ghost = Ghost.new
ghost.color  #=> "white" or "yellow" or "purple" or "red"
```
```python
ghost = Ghost()
ghost.color  #=> "white" or "yellow" or "purple" or "red"
```
```java
Ghost ghost = new Ghost();
ghost.getColor(); //=> "white" or "yellow" or "purple" or "red"
```
```c#
Ghost ghost = new Gost();
ghost.GetColor(); // => "white" or "yellow" or "purple" or "red"
```


 """ 

from random import choice
COLORS = ("white", "yellow", "purple", "red")

class Ghost(object):
    def __init__(self):
        self.color = choice(COLORS)