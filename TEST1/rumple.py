# Muhammad Ibrahim (mi2ye)

name = 'Cthulhu'
print('You will never win the game, for', name, 'is my name.')
guess = input('Guess my name: ')

while name != guess:
    print('Ha! You\'ll never guess!')
    guess = input('Guess my name: ')
    if name == guess:
        print('No! How did you guess?')


