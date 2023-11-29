
 """ 
The objective of [Duck, duck, goose](https://en.wikipedia.org/wiki/Duck,_duck,_goose) is to _walk in a circle_, tapping on each player's head until one is chosen.

----

Task:
Given an array of Player objects (an array of associative arrays in PHP) and an index (**1-based**), return the `name` of the chosen Player(`name` is a property of `Player` objects, e.g `Player.name`)

----

Example:

```
duck_duck_goose([a, b, c, d], 1) should return a.name
duck_duck_goose([a, b, c, d], 5) should return a.name
duck_duck_goose([a, b, c, d], 4) should return d.name
```
```php
// PHP only
duck_duck_goose([$a, $b, $c, $d], 1); // => $a["name"]
duck_duck_goose([$a, $b, $c, $d], 5); // => $a["name"]
duck_duck_goose([$a, $b, $c, $d], 4); // => $d["name"]
```
 """ 

def duck_duck_goose(players, goose):
    index = goose % (len(players))
    return players[index-1].name