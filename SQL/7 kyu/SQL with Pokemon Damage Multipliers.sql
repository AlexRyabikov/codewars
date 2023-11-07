/*

DESCRIPTION:

You have arrived at the Celadon Gym to battle Erika for the Rainbow Badge.

She will be using Grass-type Pokemon. Any fire pokemon you have will be strong against grass, but your water types will be weakened. The multipliers table within your Pokedex will take care of that.

Using the following tables, return the pokemon_name, modifiedStrength and element of the Pokemon whose strength, after taking these changes into account, is greater than or equal to 40, ordered from strongest to weakest.

pokemon schema

id
pokemon_name
element_id
str
multipliers schema

id
element
multiplier

*/

SELECT s1.pokemon_name AS pokemon_name, s1.str*s2.multiplier AS modifiedStrength, s2.element AS element
FROM pokemon AS s1, multipliers AS s2
WHERE
s1.element_id = s2.id AND
s1.str*s2.multiplier >= 40
ORDER BY modifiedStrength DESC