
 """ 
Implement `String#digit?` (in Java `StringUtils.isDigit(String)`), which should return `true` if given object is a digit (0-9), `false` otherwise.
 """ 

def is_digit(n):
    print(n)
    if n.isdigit() and n in ('0123456789'):
        return True
    else:
        return False
    