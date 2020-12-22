import re
# text = '''
# '''
# two_words = re.compile(r'([A-Za-z]+) ([A-Za-z]+)')
# new_text = two_words.sub(r'\2', text)
# print(two_words.search(text))
# for match in two_words.finditer(text):
#     print(match.group())

# text = '''
# Tychonievich, Luther and Upsorn Praphamontripong and Dill, Craig
# '''
# backwards_names = re.compile(r'([A-Z][a-z]+,) ([A-Z][a-z]+)')
# new_text = backwards_names.sub(r'\2 \1', text)
# print(new_text)

# louslist
# submission = re.compile(r'submission/.*/lab([0-9]+)/([a-z]+[0-9][a-z+])/(.+\.py)')
# text = '''
# submission/louslist/lab102/mst3k/loustlist.py
# submission/calculate/lab105/lat7h/loustlist.py'''
#
# new_text = submission.sub(r'\2-\1/\3', text)
# print(new_text)

# add english spacing: change ". " to ".  " except after titles

# bad_space = re.compile(r'\. ([^\s])')
# text = '''
# This text is inconsistent. It sometimes uses one space.  It sometimes uses two.'''
# new_text = bad_space.sub(r'.  \1', text)
# print(new_text)


# likely_name - elegance
# name name               (n|i)name
# int name
# name name name
# name int name
# int name name
