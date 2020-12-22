import random

text = '''given some words scramble the nonstart nonend letters of each words'''


def shuffle_word(word):
    example = list(word)
    random.shuffle(example)
    new_word = ''
    for letter in example:
        new_word += letter
    return new_word

words = text.split()
line = ''
for word in words:
    if len(word) == 1:
        line += word + ' '
    else:
        middle = word[1:-1]
        shuffled = shuffle_word(middle)
        line += (word[0] + shuffled + word[-1] + ' ')

print(line)

