# Muhammad Ibrahim (mi2ye)


def is_median(median):
    if median(0, 0, 0) != 0:
        return False
    if median(1, 1, 1) != 1:
        return False
    if median(1, 1, 2) != 1:
        return False
    if median(1, 1, 3) != 1:
        return False
    if median(1, 2, 1) != 1:
        return False
    if median(1, 2, 2) != 2:
        return False
    if median(1, 2, 3) != 2:
        return False
    if median(1, 3, 1) != 1:
        return False
    if median(1, 3, 2) != 2:
        return False
    if median(1, 3, 3) != 3:
        return False
    if median(2, 1, 1) != 1:
        return False
    if median(2, 1, 2) != 2:
        return False
    if median(2, 1, 3) != 2:
        return False
    if median(2, 2, 1) != 2:
        return False
    if median(2, 2, 2) != 2:
        return False
    if median(2, 2, 3) != 2:
        return False
    if median(2, 3, 3) != 3:
        return False
    if median(3, 1, 1) != 1:
        return False
    if median(3, 1, 2) != 2:
        return False
    if median(3, 1, 3) != 3:
        return False
    if median(3, 2, 1) != 2:
        return False
    if median(3, 2, 2) != 2:
        return False
    if median(3, 2, 3) != 3:
        return False
    if median(3, 3, 1) != 3:
        return False
    if median(3, 3, 2) != 3:
        return False
    if median(3, 3, 3) != 3:
        return False
    else: return True

