
 """ 
Complete the function that receives as input a string, and produces outputs according to the following table:

| Input | Output
| ----  | ------
| "Jabroni" | "Patron Tequila"
| "School Counselor" | "Anything with Alcohol"
| "Programmer" | "Hipster Craft Beer"
| "Bike Gang Member" | "Moonshine"
| "Politician" | "Your tax dollars"
| "Rapper" | "Cristal"
| *anything else* | "Beer"

**Note:** *anything else* is the default case: if the input to the function is not any of the values in the table, then the return value should be `"Beer"`.

Make sure you cover the cases where certain words do not show up with correct capitalization. For example, the input `"pOLitiCIaN"` should still return `"Your tax dollars"`.

 """ 

def get_drink_by_profession(param):
    s = param.lower()
    s = s.title()
    
    if s == 'Jabroni':
        return "Patron Tequila"
    elif s == "School Counselor":
        return "Anything with Alcohol";
    elif s == "Programmer":
        return "Hipster Craft Beer";
    elif s ==  "Bike Gang Member":
        return "Moonshine";
    elif s ==  "Politician":
        return "Your tax dollars";
    elif s ==  "Rapper":
        return "Cristal";
    else:
        return "Beer";