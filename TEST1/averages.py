# Muhammad Ibrahim (mi2ye)


def median(a, b, c):
    if (b <= a <= c) or (c <= a <= b):
        return a
    if (a <= b <= c) or (c <= b <= a):
        return b
    if (a <= c <= b) or (b <= c <= a):
        return c


def mean(a, b, c):
    return (a + b + c) / 3


def rms(a, b, c):
    a1, b1, c1 = a ** 2, b ** 2, c ** 2
    m = mean(a1, b1, c1)
    return m ** (1/2)


def middle_average(a, b, c):
    a1 = mean(a, b, c)
    b1 = median(a, b, c)
    c1 = rms(a, b, c)
    return median(a1, b1, c1)


print(middle_average(1, 5, 1))
print(median(1, 5, 1))
print(mean(1, 5, 1))
print(rms(1, 5, 1))
