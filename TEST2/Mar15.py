# sentence = 'This is a longer piece of text'
# words = sentence.split()
#
# '''
# word = words(0)
# do_stuff(word)
# word = words[1]
# do_stuff(word)
# '''
#
# for word in words:
#     print(word)
#
# print(words)
# count = 0
# for x in 'hi there':
#     print('x =', x)
#     count += 1
# print(count)
#
# numbers = [1,2,3,4,5,6,7,8,9]
# for number in numbers:
#     number **= 2
# print(numbers)
#
# for i in range(len(numbers)):
#     numbers[i] **= 2
#
# print(numbers)

# '''
# write code that, given a list of strings, creates a list of the lengths of the strings
# '''

# statement = input('Type something: ')
# words = statement.split()
# lol = []
# for word in range(len(words)):
#     lol.append(len(words[word]))
# print(words)
# print(lol)

# x = [x**2 for x in range(10) if x%2 == 0] KINDA COOL NOT REQUIRED LOOK THIS SHIT UP

# look at the letters of one word
# text = 'Hi there, I am happy to meet you.'
# start = text.find('happy')
# end = text.find(' ', start)
# print(text[start:end])
# for i in range(start, end):
#     print(text[i])

# def mean(values):
#     total = 0
#     number = 0
#     for value in values:
#         total += value
#         number += 1
#     return total / number

# def harmonic_mean(values):
#     '''n / (1/a + 1/b + 1/c ...)'''
#     total = 0
#     number = 0
#     for value in values:
#         total += 1 / value
#         number += 1
#     return number / total

# def mean2(values):
#     return sum(values) / len(values)

# lens = []
# names = 'Charlottesville DC Richmond Adam Bagel Clan Idiot Apple'.split()
# for words in names:
#     lens.append(len(words))
#
# lens.sort()
# print(lens)


