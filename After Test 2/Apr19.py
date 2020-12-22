# Regular expressions are easiest to build left to right
import re

#  CASE 1
# examples = r'''
# "xyz"
# "x\"y\"z"
# ""
# "
# '''
# string = re.compile(r'"([^"\\]|(\\.))*"')
# for match in string.finditer(examples):
#     print(match.group())

# Case 2
text = r'''
3
3 + 4
303+4 -5 + 6
'''
addition = re.compile(r'([0-9]+( ?[\+\-] ?[0-9]+)*)')
for match in addition.finditer(text):
    print(match.group(), match.groups())

# Case 3