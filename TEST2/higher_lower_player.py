# Muhammad Ibrahim (mi2ye)

print('Think of a number between 1 and 100 and I\'ll guess it.')
guesses = int(input('How many guesses do I get? '))
upper_bound = 100
lower_bound = 0
number_of_guesses = 0
previous_mean_bounds = 0
answer = 'none'
while number_of_guesses < guesses:
    mean_bounds = ((upper_bound + lower_bound) // 2)
    if answer == 'higher' and lower_bound == 100:
        print('It can\'t be higher than 100!')
        break
    elif answer == 'lower' and upper_bound == 0:
        print('It can\'t be lower than 0!')
        break
    if answer == 'higher' and abs(mean_bounds - previous_mean_bounds) == 0:
        print('Wait; how can it be both higher than', previous_mean_bounds, 'and lower than', str(mean_bounds + 1) + '?')
        break
    if answer == 'lower' and abs(mean_bounds - previous_mean_bounds) <= 1:
        print('Wait; how can it be both higher than', mean_bounds, 'and lower than', str(previous_mean_bounds) + '?')
        break
    answer = input('Is the number higher, lower, or the same as ' + str(mean_bounds) + '? ')
    if answer == 'higher':
        lower_bound = mean_bounds
    elif answer == 'lower':
        upper_bound = mean_bounds
    elif answer == 'same':
        print('I won!')
        break
    previous_mean_bounds = mean_bounds
    number_of_guesses += 1

if number_of_guesses == guesses and answer == 'same':
    print('I won!')
elif number_of_guesses == guesses:
    correct = int(input('I lost; what was the answer? '))
    if lower_bound < correct < upper_bound:
        print('Well played!')
    elif lower_bound > correct:
        print('That can\'t be; you said it was higher than', str(lower_bound) + '!')
    elif upper_bound < correct:
        print('That can\'t be; you said it was lower than', str(upper_bound) + '!')
        