# ways to read urls
# connection.read() -> a byte string (all the data)
# connection.readline() -> a byte string for each line; first line we haven't read yet
# connection.readlines() -> a byte string for each line; reads all of the lines and puts them in a list
# for x in connection: -> a byte string for each line

# connection = open('fake-queue.csv')
# header = connection.readline().strip().split(',')
# print(header)
# table = []
# for line in connection:
#     row = line.strip().split(',')
#     table.append(row)
#
# # print(table[2][1])
# # total = 0
# # count = 0
# # for row in table:
# #     total += int(row[4])
# #     count += 1
#
# # which student uses the most TA time
#
# dict = {}
# for row in table:
#     total_time = int(row[6]) - int(row[5])
#     if row[0] in dict:
#         row[0] += total_time
#     elif row[0] not in dict:
#         dict[row[1]] = int(row[6]) - int(row[5])
# print(dict)
