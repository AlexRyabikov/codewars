
 """ 
You have to write a function that describe Leo:
```python
def leo(oscar):
  pass
```
```javascript
function leo(oscar) {

}
```
```elixir
def leo(oscar) do
  # ...
end
```

if oscar was (integer) 88, you have to return "Leo finally won the oscar! Leo is happy".</br>
if oscar was 86, you have to return "Not even for Wolf of wallstreet?!"</br>
if it was not 88 or 86 (and below 88) you should return "When will you give Leo an Oscar?"</br>
if it was over 88 you should return "Leo got one already!"
 """ 

def leo(oscar):
    if oscar > 88:
        return "Leo got one already!"
    elif oscar == 88:
        return "Leo finally won the oscar! Leo is happy"
    elif oscar == 86:
        return "Not even for Wolf of wallstreet?!"
    else:
        return "When will you give Leo an Oscar?"