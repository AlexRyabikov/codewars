
 """ 
You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.

Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the examples:

```
[]                                -->  "no one likes this"
["Peter"]                         -->  "Peter likes this"
["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"
```


```if:c
* return must be an allocated string
* do not mutate input
```

Note: For 4 or more names, the number in `"and 2 others"` simply increases.

 """ 

def likes(names):
    kol = len(names)
    others = str(kol - 2)
    if kol == 0:
        return 'no one likes this'
    elif kol == 1:
        return names[0]+' likes this'
    elif kol == 2:
        return names[0]+' and '+names[1]+' like this'
    elif kol == 3:
        return names[0]+', '+names[1]+' and '+names[2]+' like this'
    elif kol >= 3:
        return names[0]+', '+names[1]+' and '+others+' others like this'