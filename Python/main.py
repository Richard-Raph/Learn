# Sum function
# def sum(a, b):
#     return (a + b)

# a = int(input('Enter the 1st number: '))
# b = int(input('Enter the 2nd number: '))

# print(f'The sum of {a} and {b} is {sum(a, b)}')

# Having fun conditional
# fun = "yes"

# if (fun == "yes"):
#   print("Glad you're having fun")

# Dry code using function
# def say_hello(name):
#     print(f"Hello, {name}!")
    
# say_hello('Richard')
# say_hello('Richard')

# Class definition and instance creation
# class Puppy():
#     def __init__(self, name, toy, place):
#         self.place = place
#         self.name = name
#         self.toy = toy
        
#     def play(self):
#         print(self.name + " is playing with the " + self.toy + " in the " + self.place)
        
# marble = Puppy('Marble', 'teddy bear', 'kitchen')
# marble.play()

# onyx = Puppy('Onyx', 'lizard', 'veranda')
# onyx.play()

# Modules in python
# import random

# numbers = [1, 2, 3, 4, 5] # list

# random.shuffle(numbers)
# print(numbers)

# number = random.choice(numbers)
# print(number)

# food = input("What's my favorite food? ")
#
# if food == "pizza":
#     print("Yep! that's amazing!")
# else:
#     print("Yuk! that's not it!")
#
# print("Thanks for playing")

# current = int(input("What's your current balance?: "))
# amount = int(input("How much are you withdrawing?: "))

# def withdraw(current, amount):
#     # Check if the account has enough money to withdraw the specified amount
#     if current >= amount:
#         current -= amount
#         return current

# balance = withdraw(current, amount)
# print(f"Your new balance is: {balance}")

# if balance <= 50:
#     print("You need to make a deposit")
# else:
#     print("Nothing to see here")

# Collections

# List
# cities = [
#     'Tokyo',
#     'Dakar',
#     'Mumbai',
#     'Buenos Aires'
# ]

# print(cities[1])

# Dictionary
# symbols = {
#     'bird': 'California quail',
#     'animal': 'Grizzly bear',
#     'flower': 'California poppy',
#     'fruit': 'Avocado'
# }

# print(symbols['animal'])

# spices = [
#     'salt',
#     'cumin',
#     'pepper',
#     'tumeric'
# ]

# for spice in spices:
#     print(spice)

# print('No more boring omelette!')


# i = 5
# print('Count to 100 by 5')
# while i <= 100:
#     print(i)
#     i+=5
    
# print('List complete')

fruits = [
    'salt',
    'cumin',
    'pepper',
    'tumeric'
]

print('Our fruit selection!')

for fruit in fruits:
    print(fruit)
