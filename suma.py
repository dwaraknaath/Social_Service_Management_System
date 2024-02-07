# Python Program to illustrate
# Hangman Game
import random
from collections import Counter

someWords = '''apple banana mango strawberry
orange grape pineapple apricot lemon coconut watermelon
cherry papaya berry peach lychee muskmelon'''

someWords = someWords.split(' ')
# randomly choose a secret word from our "someWords" LIST.
word = random.choice(someWords)

# Define a dictionary to store hints for each fruit
hints = {
    'apple': 'It is a popular fruit and comes in various colors.',
    'banana': 'It is a yellow fruit and is rich in potassium.',
    'mango': 'It is a tropical fruit known for its sweet taste.',
    'strawberry': 'It is a small red fruit often used in desserts.',
    'orange': 'It is a citrus fruit and a good source of vitamin C.',
    'grape': 'It grows in clusters and is used to make wine.',
    'pineapple': 'It has a spiky skin and a sweet, tangy taste.',
    'apricot': 'It is a small, orange fruit with a velvety skin.',
    'lemon': 'It is sour in taste and used for its juice and zest.',
    'coconut': 'It has a hard shell and refreshing water inside.',
    'watermelon': 'It is a large fruit with juicy, red flesh.',
    'cherry': 'It is a small, round fruit with a pit in the center.',
    'papaya': 'It is a tropical fruit with orange flesh and black seeds.',
    'berry': 'It is a small, sweet fruit that comes in different varieties.',
    'peach': 'It has fuzzy skin and a sweet, juicy flesh.',
    'lychee': 'It is a small fruit with a rough, red skin and white flesh.',
    'muskmelon': 'It is a type of melon with a sweet, musky aroma.'
}

if __name__ == '__main__':
    print('Guess the word! HINT: word is a name of a fruit')

    if word in hints:
        print('Hint:', hints[word])

    for i in word:
        # For printing the empty spaces for letters of the word
        print('_', end=' ')
    print()

    playing = True
    # list for storing the letters guessed by the player
    letterGuessed = ''
    chances = len(word) + 2
    correct = 0
    flag = 0
    try:
        while (chances != 0) and flag == 0:  # flag is updated when the word is correctly guessed
            print()
            chances -= 1

            try:
                guess = str(input('Enter a letter to guess: '))
            except:
                print('Enter only a letter!')
                continue

            # Validation of the guess
            if not guess.isalpha():
                print('Enter only a LETTER')
                continue
            elif len(guess) > 1:
                print('Enter only a SINGLE letter')
                continue
            elif guess in letterGuessed:
                print('You have already guessed that letter')
                continue

            # If letter is guessed correctly
            if guess in word:
                # k stores the number of times the guessed letter occurs in the word
                k = word.count(guess)
                for _ in range(k):
                    letterGuessed += guess  # The guess letter is added as many times as it occurs

            # Print the word
            for char in word:
                if char in letterGuessed and (Counter(letterGuessed) != Counter(word)):
                    print(char, end=' ')
                    correct += 1
                # If user has guessed all the letters
                # Once the correct word is guessed fully,
                elif (Counter(letterGuessed) == Counter(word)):
                    # the game ends, even if chances remain
                    print("The word is:", end=' ')
                    print(word)
                    flag = 1
                    print('Congratulations, You won!')
                    break  # To break out of the for loop
                    break  # To break out of the while loop
                else:
                    print('_', end=' ')

        # If user has used all of his chances
        if chances <= 0 and (Counter(letterGuessed) != Counter(word)):
            print()
            print('You lost! Try again..')
            print('The word was {}'.format(word))

    except KeyboardInterrupt:
        print()
        print('Bye! Try again.')