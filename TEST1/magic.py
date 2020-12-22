# Muhammad Ibrahim (mi2ye)
# Nathan Tumperi (nlt4xp)
import random


def rand():
    x = random.randrange(5)
    if x == 0:
        return 'Hell Yeah!'
    if x == 1:
        return 'Over my dead body!'
    if x == 2:
        return 'Yabbadabbadoo!'
    if x == 3:
        return 'Hell no!'
    if x == 4:
        'How would I know, you fool?'


def oracle(question):
    if question.startswith('Is') or question.startswith('Could') or question.startswith(
            'Can') or question.startswith('Will') or question.startswith('Would') or question.startswith(
            'Have') or question.startswith('Did') or question.startswith('Does') or question.startswith(
            'Shall') or question.startswith('Should') or question.startswith('Am') or question.startswith('Is') or question.startswith('Do'):
        print(rand())
    else:
        print('That\'s not a yes or no question!')
        question = str(input('Ask me a yes or no question: '))
        if question.startswith('Is') or question.startswith('Could') or question.startswith(
                'Can') or question.startswith('Will') or question.startswith('Would') or question.startswith(
            'Have') or question.startswith('Did') or question.startswith('Does') or question.startswith(
            'Shall') or question.startswith('Should') or question.startswith('Am') or question.startswith(
            'Is') or question.startswith('Do'):
            print(rand())
        else:
            print('That\'s not a yes or no question! I\'m done with you, next!')


question = str(input('Ask me a yes or no question: '))

oracle(question)

