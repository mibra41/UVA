# Muhammad Ibrahim (mi2ye)

import urllib.request

site = urllib.request.urlopen('http://cs1110.cs.virginia.edu/files/words.txt')
dictionary = []
for x in site:
    decoded = x.decode('utf-8')
    word = decoded.strip()
    dictionary.append(word)

print('Type text; enter a blank line to end.')
text = input('').strip('.,?;:-"[](){}<>/!“”‘’_*')
text = text.strip("'")
while text != '':
    split_text = text.split()
    user_words = []
    for y in split_text:
        user_word = y.strip('.,?;:-"[](){}<>/!“”‘’_*')
        user_word = user_word.strip("'")
        user_words.append(user_word)
    misspelled = []
    for word in user_words:
        status = False
        for entry in dictionary:
            if word == entry or word.lower() == entry:
                status = True
        if not status:
            misspelled.append(word)
    for word in misspelled:
        print('  MISSPELLED:', word)
    text = input('')