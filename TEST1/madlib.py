#Muhammad Ibrahim (mi2ye)
#Nathan Tumperi (nlt4xp)

name = input('Female name: ')
noun1 = input('Plural object: ')
person = input('Dangerous people: ')
mean_animal = input('Mean animal: ')
verb1 = input('past tense verb: ')
verb2 = input('Malicious past tense verb: ')
household_object = input('Household object: ')
bodypart1 = input('Body part: ')
verb3 = input('Action verb: ')
bodypart2 = input('Different body part: ')
verb4 = input('Aggressive eating technique: ')

def par1():
    print('Once upon a time, there was a girl named ' + name + '. ')
    print('One day, ' + name + '\'s mother told ' + name + ' to deliver ' + noun1)
    print(' to grandma, \"but don\'t talk to ' + person + '\'s on the way!\" she said.')

def par2():
    print('The Big Bad ' + mean_animal + ' then ' + verb1 + ' to Grandma\'s house,')
    print('knocked on the door, and ' + verb2 + ' her. The Big Bad ' + mean_animal)
    print('put on Grandma\'s clothes and waited in her ' + household_object + '. ')
    print('When', name, 'got to her granda\'s house, she entered and went to the', household_object + '.',)
def par3():
    print('"My, what big', bodypart1, 'you have, grandma! She said in surprise". "All the better to', verb3, 'my dear."')
    print('"My, what big', bodypart2, 'you have, grandma!" "All the better to', verb4, 'you, my dear.')
    print('The', mean_animal, 'ate', name + '.')

print()
par1()
print()
par2()
print()
par3()