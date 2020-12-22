def func(x, y):
    x = 3
    y = [1]
    return x

x = 2
y = [3]
print(func(x, y))
print(x)
print(y)

import random

num1 = random.randint(1,10)

num2 = int(input('Give me a number between 1 and 10. '))


def random():
    if num1 == num2:
        return 'you win!!'
    else:
        return 'try again!'

print(random())