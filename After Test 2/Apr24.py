import os.path
# 1. open file (for writing)
# 2. write stuff
# 3. close the file -- makes sure all data we wrote is on disk
#
# #1
# f = open('text.txt', 'w')
# #2
# f.write('Did this also work too?')
# #3
# f.close()

# use print not write

# #1
# f = open('text.txt', 'w')
# #2
# print('the value of f is', f, file=f)
# #3
# f.close()

# use the with statement

# g = open('ticker.txt', 'w')
# try:
#     running_total = 0
#     for i in range(10):
#         num = int(input('Type an integer: '))
#         print(running_total, '+', num, file=f)
#         running_total += num
#     g.close()
# finally:
#     g.close()

# 1 use with
# with open('text.txt', 'w') as f:
#     2
#     print('the value of f is', f, file=f)
# 3 by exiting indent, the file is closed

def get_name():
    # check the file first
    if os.path.exists('about_the_user.txt'):
        with open('about_the_user.txt', 'r') as f:
            name = f.read().strip()
            return name
    else:
    # if not there, ask the user and save the file
        name = input('What is your name? ')
        with open('about_the_user.txt', 'w') as f:
            print(name, file=f)
        return name
name = get_name()
color = input('What is a color you like? ')
print('Hi, ', name,' I am thinking ', color, ' thoughts about you.')