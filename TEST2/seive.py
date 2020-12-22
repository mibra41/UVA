# Muhammad Ibrahim (mi2ye)


def primes(x):
    range1 = range(3, x, 2)
    primes_list = [2]
    for i in range1:
        status = True
        remainders = []
        for y in primes_list:
            remainder = i % y
            remainders.append(remainder)
        if 0 in remainders:
            status = False
        else:
            status = True
        if status:
            primes_list.append(i)
    return primes_list
print(primes(123))