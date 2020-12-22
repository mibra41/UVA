# Get A, B, and C of the polynomial Ax^2 + Bx + C
# then get x
# and print the value of the polynomial

print('let us solve Ax^2 + Bx + C = 0 for you.')
a = float(input('What is the value of A? '))
b = float(input('What is the value of B? '))
c = float(input('What is the value of C? '))

x_1 = ((-b) + ((b ** 2) - (4 * a * c)) ** 1/2) / 2
x_2 = ((-b) - ((b ** 2) - (4 * a * c)) ** 1/2) / 2

print('X=', x_2,',', x_1)