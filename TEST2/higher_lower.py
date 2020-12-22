# Muhammad Ibrahim (mi2ye)

import random

number_original = int(input('What should the number be? '))
if number_original == -1:
    number = random.randrange(1, 101)
else: number = number_original

guesses = int(input('How many guesses? '))
number_of_guesses = 0

while number_of_guesses < guesses:
    guess = int(input('Guess a number: '))
    if guess < number:
        print('The number is higher than that.')
    elif guess > number:
        print('The number is lower than that.')
    else:
        print('You win!')
        break
    number_of_guesses += 1
if number_of_guesses == guesses:
    print('You lose; the number was', str(number) + '.')
