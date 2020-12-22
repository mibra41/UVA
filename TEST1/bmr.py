# Muhammad Ibrahim (mi2ye)


def bmr(m, h, a, s):
    if s == 'male':
        return (10 * m) + (6.25 * h) - (5 * a) + 5
    if s == 'female':
        return (10 * m) + (6.25 * h) - (5 * a) - 161


print(bmr(74.7, 162.9, 19, 'male'))