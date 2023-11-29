
 """ 
Your job is to find the gravitational force between two spherical objects (obj1 , obj2).

input
====

Two arrays are given : 

- arr_val (value array), consists of 3 elements
    - 1st element : mass of obj 1
    - 2nd element : mass of obj 2
    - 3rd element : distance between their centers
- arr_unit (unit array), consists of 3 elements
    - 1st element : unit for mass of obj 1
    - 2nd element : unit for mass of obj 2
    - 3rd element : unit for distance between their centers

mass units are : 
    
- kilogram (kg)
- gram (g)
- milligram (mg)
- microgram (μg)
- pound (lb)

distance units are : 

- meter (m)
- centimeter (cm)
- millimeter (mm)
- micrometer (μm)
- feet (ft)

Note
====


value of G = 6.67 × 10<sup>−11</sup> N⋅kg<sup>−2</sup>⋅m<sup>2<sup> 

1 ft = 0.3048 m

1 lb = 0.453592 kg

return value must be Newton for force (obviously)

`μ` copy this from here to use it in your solution 

 """ 

def solution(arr_val, arr_unit) :
    # Gravitational constant
    G = 6.67e-11
    
    # Conversion factors
    mass_conversion = {
        'kg': 1,
        'g': 1e-3,
        'mg': 1e-6,
        'μg': 1e-9,
        'lb': 0.453592
    }
    
    distance_conversion = {
        'm': 1,
        'cm': 1e-2,
        'mm': 1e-3,
        'μm': 1e-6,
        'ft': 0.3048
    }
    
    # Convert all values to SI units
    m1 = arr_val[0] * mass_conversion[arr_unit[0]]
    m2 = arr_val[1] * mass_conversion[arr_unit[1]]
    r = arr_val[2] * distance_conversion[arr_unit[2]]
    
    # Calculate the gravitational force
    F = G * (m1 * m2) / r**2
    
    return F