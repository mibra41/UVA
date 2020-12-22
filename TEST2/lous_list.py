# Muhammad Ibrahim (mi2ye)
# found the sorted() function on stackoverflow.com

import urllib.request


def instructors(department):
    site = urllib.request.urlopen('http://cs1110.cs.virginia.edu/files/louslist/' + department)
    instructors_list = []
    for line in site:
        decoded_text = line.decode('utf-8')
        cells = decoded_text.strip().split('|')
        if '+' in (cells[4])[-2]:
            x = ((cells[4])[0:-2])
            instructors_list.append(x)

        else:
            instructors_list.append(cells[4])
    instructors_list = list(set(instructors_list))
    return sorted(instructors_list)


def class_search(dept_name, has_seats_available=True, level=None, not_before=None, not_after=None):
    site = urllib.request.urlopen('http://cs1110.cs.virginia.edu/files/louslist/' + dept_name)
    classes_list = []
    for line in site:
        decoded_text = line.decode('utf-8')
        cells = decoded_text.strip().split('|')
        status = []
        if has_seats_available:
            if cells[16] > cells[15]:
                status.append(True)
            else:
                status.append(False)
        if level != None:
            if cells[1][0] == (str(level)[0]):
                status.append(True)
            else:
                status.append(False)
        if not_before != None:
            if int(cells[12]) >= not_before:
                status.append(True)
            else:
                status.append(False)
        if not_after != None:
            if int(cells[12]) <= not_after:
                status.append(True)
            else:
                status.append(False)
        if False not in status:
            classes_list.append(cells)
    return classes_list
