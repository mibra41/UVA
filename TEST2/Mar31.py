# exceptions_1

# def get_number():
#     while True:
#         n = input('Type a number: ')
#         try:
#             n = int(n)
#             return n
#         except:
#             print('Type an actual number:')
# n = get_number()
# print(n ** 2)

# exceptions_2
def get_number_and_divide():
    while True:
        n = input('number: ')
        d = input('number: ')
        try:
            n = int(n)
            d = int(d)
            return n / d
        except ValueError:
            print('Those were not both numbers')
        except ZeroDivisionError:
            print('You cannot divide by zero!')
print(get_number_and_divide())