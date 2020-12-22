# regular expressions
# Flexible string matching
#     s.find('The')
#     "the" in s
#     s.find('The', 17)
# Compile- taking some way of performing what you want to do
# and making it easier

import re

the_word_the = re.compile('[Tt]he')
text = '''
Covers the same material as CS 1110/1111, but is
organized based on the assumption that none of
 the students have any prior programming experience.
 By contrast, CS 1110 assumes the most students
 have no prior the programming experience; CS
  1111 assumes all students do have prior programming
  experience.'''
match = the_word_the.search(text)
print(match.group(), match.start())
for match in the_word_the.finditer(text):
    print(match.group(), match.start())

# character - 't'
# character_class '[tT]', '[03a-Z]'
