
 """ 
<img src="https://i.imgur.com/ta6gv1i.png?1" />
<!-- Featured 30/6/2021 -->

# Kata Task

I have a cat and a dog.

I got them at the same time as kitten/puppy. That was `humanYears` years ago.

Return their respective ages now as [`humanYears`,`catYears`,`dogYears`]

NOTES:
* humanYears >= 1
* humanYears are whole numbers only

## Cat Years

* `15` cat years for first year
* `+9` cat years for second year
* `+4` cat years for each year after that

## Dog Years

* `15` dog years for first year
* `+9` dog years for second year
* `+5` dog years for each year after that

<hr>

**References**

* http://www.catster.com/cats-101/calculate-cat-age-in-cat-years
* http://www.slate.com/articles/news_and_politics/explainer/2009/05/a_dogs_life.html

<hr>

If you liked this Kata there is another <a href="https://www.codewars.com/kata/cat-years-dog-years-2">related one here</a>
 """ 

def human_years_cat_years_dog_years(human_years):
    
    cat_years = 0
    dog_years = 0
    
    if human_years == 1:
        cat_years = 15
        dog_years = 15
    elif human_years == 2:
        cat_years = 24
        dog_years = 24
    elif human_years >= 3:
        cat_years = 4 * (human_years - 2) + 24
        dog_years = 5 * (human_years - 2) + 24
        
    return [human_years, cat_years, dog_years]