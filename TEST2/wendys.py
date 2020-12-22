# Muhammad Ibrahim (mi2ye)
# Nathan Tumperi (nlt4xp)

import webbrowser
import math

def distance_between(lat_1, lon_1, lat_2, lon_2):
    '''Uses the "great circle distance" formula and the circumference of the earth
    to convert two GPS coordinates to the miles separating them'''
    lat_1, lon_1 = math.radians(lat_1), math.radians(lon_1)
    lat_2, lon_2 = math.radians(lat_2), math.radians(lon_2)
    theta = lon_1 - lon_2
    dist = math.sin(lat_1)*math.sin(lat_2) + math.cos(lat_1)*math.cos(lat_2)*math.cos(theta)
    dist = math.acos(dist)
    dist = math.degrees(dist)
    dist = dist * 69.06         # 69.09 = circumference of earth in miles / 360 degrees
    return dist

text = open('wendys.csv')
table = []
for line in text:
    row = line.strip().split(',')
    table.append(row)

user_lat = float(input('Enter a latitutde: '))
user_lon = float(input('Enter a longituge: '))

distances = []
latitudes = []
longitudes = []

for row in table:
    distance = distance_between(user_lat, user_lon, float(row[1]), float(row[0]))
    distances.append(distance)
    latitudes.append(float(row[1]))
    longitudes.append(float(row[0]))

distances_float = []
for x in distances:
    x = float(x)
    distances_float.append(x)

min_distance = min(distances_float)
str_distance = str(min_distance)
index = distances_float.index(min(distances_float))
latitude = latitudes[index]
longitude = longitudes[index]

for row in table:
    if row[1] == str(latitude) and row[0] == str(longitude):
        index4 = row[4].replace(' ', '+')
        index5 = row[5].replace(' ', '+')
        index6 = row[6].replace(' ', '+')
        webbrowser.open('http://maps.google.com/maps?q='+index4+index5+index6)
