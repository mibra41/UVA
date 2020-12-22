# variables go in one direction
#   x = 3 allows x to replace 3, but not the other way around
# so do lists
# broccoli -> green vegetable
#       key           value
# green vegetable -/> broccoli
# x is key, y is value
# dicts are unordered data types

# d = {3: 'three', False: [1, 3, range(2,7)]}
# d = {3: 'three', 3: 'Three'} NOT OKAY
# d = {'three': 3, 'Three': 3} # OKAY to have 2 keys with same value
# d['three'] = 102
# d[3.14] = 'pi'
# in dicts, "in" operator returns true if x is a key of c
# phone_book = {'Tychonievich': 33789, 'Help!': 911}
# name = input('who do you want to call? ')
# if name in phone_book:
#     print(phone_book[name])
# else:
#      print('we don\'t have that number')
# d = {3:5, 7:10}
# d.keys() # --> [3, 7]
# d.values() # --> [5, 10]
# d.items() # -->
