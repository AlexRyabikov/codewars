
 """ 
The number n is <b>Evil</b> if it has an even number of 1's in its binary representation.</br>
The first few Evil numbers: 3, 5, 6, 9, 10, 12, 15, 17, 18, 20</br></br>
The number n is <b>Odious</b> if it has an odd number of 1's in its binary representation.</br>
The first few Odious numbers: 1, 2, 4, 7, 8, 11, 13, 14, 16, 19</br></br>
You have to write a function that determine if a number is Evil of Odious, function should return "It's Evil!" in case of evil number and "It's Odious!" in case of odious number.

good luck :)


 """ 

def evil(n):
    return 'It\'s {}!'.format(('Evil', 'Odious')[bin(n).count('1') % 2])