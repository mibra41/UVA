# import urllib.request
#
# post_box = urllib.request.urlopen('http://cs1110.cs.virginia.edu/files/snark.txt')
# count = 0
# words = 0
# characters = 0
# for line in post_box:
#     line = line.decode('utf-8')
#     count += 1
#     words += len(line.split())
#     characters += len(line)
# print(count, words, characters)


# post_box = open('vastats.csv')
# header = post_box.readline()
# header2 = header.strip().split(',')
# name_column = header2.index('Name')
# population_column = header2.index('Total Population')
# total = 0
# count = 0
# for line in post_box:
#     cells = line.split(',')
#     if 'town' in cells[name_column]:
#         print(cells[name_column], 'has', cells[population_column], 'people')
#         count += 1
#         total += int(cells[population_column])

