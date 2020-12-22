# variables do not have scope outside of the function


def line(m, x, b):
    y = m * x + b
    return y


def x_intercept(m, b):
    '''solve 0 = mx + b for x'''
    x = -b / m
    return x


def intersect(m1, b1, m2, b2):
    '''find the intersection of two lines'''
    x = x_intercept(m1 - m2, b1 - b2)
    return x

line1m, line1b = 2, 3
line2m, line2b = -5, 13

print(intersect(line1m, line1b, line2m, line2b))




