age = (input('How old are you? '))

non_integer_age = float(age)
integer_age = int(non_integer_age)
fake_age = integer_age - 5
print('You don\'t even look', str(fake_age) + '!')
