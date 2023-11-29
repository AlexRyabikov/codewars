
 """ 
Write function bmi that calculates body mass index (bmi = weight / height<sup>2</sup>).


if bmi <= 18.5 return "Underweight"

if bmi <= 25.0 return "Normal"

if bmi <= 30.0 return "Overweight"

if bmi > 30 return "Obese"
 """ 

def bmi(weight, height):
    bmi = float(weight / (height * height))
    if bmi <= 18.5 :
        return "Underweight"
    elif bmi >= 18.5 and bmi <= 25.0:
        return "Normal"
    elif bmi >= 25.0 and bmi <= 30.0:
        return "Overweight"
    elif bmi > 30:
        return "Obese"