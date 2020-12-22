import re

# text = re.compile('(thi)?s')
# [aeiou] -> character class: one of a set of chars
# (aeiou)? -> group: all or nothing
# ? -> 0 or 1
# * -> 0 or more
# + -> 1 or more
# | -> either/or        a|an|the
# text = '''
# Covers the same material as CS 1110/1111, but is
# organized based on the assumption that none of
#  the students have any prior programming experience.
#  By contrast, CS 1110 assumes the most students
#  have no prior the programming experience; CS
#   1111 assumes all students do have prior programming
#   experience.'''
#
# noun_phrase = re.compile(r'(an|a|the) [A-za-z][a-z]*')
# for match in noun_phrase.finditer(text):
#     print(match.group(), match.start())
