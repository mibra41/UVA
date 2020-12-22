# Muhammad Ibrahim (mi2ye)

age = int(input('How old are you? '))


if age % 2 == 0:
    low = (age / 2) + 7
else:
    low = ((age - 1) / 2) + 7

high = (age * 2) - 13

print('You can date people between', int(low), 'and', high, 'years old')

