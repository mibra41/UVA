# Muhammad Ibrahim (mi2ye)

number = int(input('Enter an integer: '))
number_str = str(number)
numbers = list(number_str)


def thousands_func():
    index = int(numbers[-4])
    thou = thousands[index]
    return thou


def hundreds_func():
    index = int(numbers[-3])
    hund = hundreds[index]
    return hund


def tens_func():
    index = int(numbers[-2])
    ten = tens[index]
    return ten


def ones_func():
    index = int(numbers[-1])
    one = ones[index]
    return one


number_ex = ['', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
ones = ['', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX']
tens = ['', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC']
hundreds = ['', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM']
thousands = ['', 'M', 'MM', 'MMM']


if 0 >= number or number >= 4000:
    print('Input must be between 1 and 3999')

if 0 < number < 4000:
    if len(numbers) == 4:
        ones_func()
        tens_func()
        hundreds_func()
        thousands_func()
        answer = str(thousands_func()) + str(hundreds_func()) + str(tens_func()) + str(ones_func())
    elif len(numbers) == 3:
        ones_func()
        tens_func()
        hundreds_func()
        answer = str(hundreds_func()) + str(tens_func()) + str(ones_func())
    elif len(numbers) == 2:
        ones_func()
        tens_func()
        answer = str(tens_func()) + str(ones_func())
    elif len(numbers) == 1:
        ones_func()
        answer = str(ones_func())
    print('In roman numerals,', number_str, 'is', answer)


