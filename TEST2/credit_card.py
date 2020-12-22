# Muhammad Ibrahim (mi2ye)


def check(number):
    numbers = list(str(number))
    if len(numbers) % 2 == 0:
        list1 = (numbers[-1:0:-2])
    else:
        list1 = (numbers[-1:0:-2])
        list1.append(numbers[0])
    list1_int = []
    for x in list1:
        x = int(x)
        list1_int.append(x)
    sum1 = sum(list1_int)
    if len(numbers) % 2 == 0:
        list2 = numbers[0:-1:2]
    else:
        list2 = numbers[1:-1:2]
    list2_int = []
    for y in list2:
        y = int(y)
        y = y * 2
        list2_int.append(y)
    list2_split = []
    for l in list2_int:
        if len(str(l)) > 1:
            list2_split.append((str(l)[0]))
            list2_split.append((str(l)[1]))
        else:
            list2_split.append(l)
    list2_split_int = []
    for i in list2_split:
        i = int(i)
        list2_split_int.append(i)
    sum2 = sum(list2_split_int)
    sum3 = sum1 + sum2
    if sum3 % 10 == 0:
        return True
    else:
        return False
