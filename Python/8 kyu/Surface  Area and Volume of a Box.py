
 """ 
```if-not:julia,racket,elixir
Write a function that returns the total surface area and volume of a box as an array: `[area, volume]`
```
```if:julia
Write a function that returns the total surface area and volume of a box as a tuple: `(area, volume)`
```
```if:racket
Write a function that returns the total surface area and volume of a box as a list: `(area, volume)`
```
```if:elixir
Write a function that returns the total surface area and volume of a box as a list: `{area, volume}`
```

 """ 

def get_size(w,h,d):
    return [2*w*h+2*w*d+2*h*d, w*h*d]