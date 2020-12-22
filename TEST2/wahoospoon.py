# Muhammad Ibrahim (mi2ye)
# Hugh Thorner (htt3bn)

import random

restaurants = ["Sticks", "Yuan Ho", "Melting Pot", "East Garden", "Chik-fil-A", "Chipotle"]
styles = ["Casual", "Chinese", "Fancy", "Chinese", "Casual", "Mexican"]
costs = ["$", "$", "$$$", "$$", "$", "$"]

def get_random_restaurant():
    r = random.choice(restaurants)
    index = restaurants.index(r)
    s = styles[index]
    c = costs[index]
    return r, s, c


def get_restaurant_style(chosen_style):
    possible_restaurants_indices = []
    for x in range(len(styles)):
        if styles[x] == chosen_style:
            possible_restaurants_indices.append(x)
    rest_number = (random.choice(possible_restaurants_indices))
    r = restaurants[rest_number]
    s = styles[rest_number]
    c = costs[rest_number]
    return r, s, c


def get_restaurant_cost(chosen_cost):
    possible_restaurants_indices = []
    for x in range(len(costs)):
        if costs[x] == chosen_cost:
            possible_restaurants_indices.append(x)
    rest_number = (random.choice(possible_restaurants_indices))
    r = restaurants[rest_number]
    s = styles[rest_number]
    c = costs[rest_number]
    return r, s, c



print("Welcome to WahooSpoon!")
print("  1. Get a random restaurant")
print("  2. Get a random restaurant based on style")
print("  3. Get a random restaurant based on cost")
choice = int(input("Choice? "))
if choice == 1:
    r, s, c = get_random_restaurant()
elif choice == 2:
    print(set(styles))
    style = input("What style would you like?: ")
    r, s, c = get_restaurant_style(style)
else:
    print(set(costs))
    cost = input("What cost would you like?: ")
    r, s, c = get_restaurant_cost(cost)

print("We're going to", r, "today! (Style:", s, "/ Cost:", c, ")")


