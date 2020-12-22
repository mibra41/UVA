post_box = open('vastats.csv')
header = post_box.readline()
total = 0
count = 0
for line in post_box:
    cells = line.split(',')
    if 'town' in cells[1]:
        count += 1
        total += int(cells[2])
print('average population:', total/count)