import os.path
def read_information(filename):
    if not os.path.exists(filename):
        return {}
    connection = open(filename)
    food = {}
    for line in connection:
        row = line.strip().split(',')
        food_type, commonness = row
        food[food_type] = commonness
    return(food)


def write_information(filename, d):
    with open(filename, 'w') as f:
        for key in d.keys():
            value = d[key]
            print(key + ',' + value, file=f)


def change_key(filename, key, new_value):
    # make a temporary file
    with open('temporary_file.csv', 'w') as temp:
        # copy contents
        with open(filename, 'r') as old:
            for line in old:
                row = line.split(',')
                if row[0] == key:
                    print(key+','+new_value, file=temp)
                else:
                    print(line.strip(), file=temp)
    # remove the old file
    os.remove(filename)
    # rename the temporary file
    os.rename('temporary_file.csv', filename)

user = read_information('user_info.csv')

def get(key):
    if key in user:
        return user[key]
    else:
        value = input('What is your ' +key+'? ')
        user[key] = value
        write_information('user_info.csv', user)
        return value


name = get('name')
color = get('liked color')
print('Hi, ', name,', I am thinking ', color, ' thoughts about you.')

