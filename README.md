# Conway's Game of Life

---

Our interpretation of John Conway's Game of Life made in HTML.



## Description:

For our school project we needed to make the game of life, a famous program written by John Conway in 1970. It follows a simple structure of a grid with each grid being either on or off or a more known term: dead or alive.

Game of Life is a zero player game, meaning that the player has little to no involvement.



##### Rules:

When a cell is placed it will stay alive for one generation and then die. This is because a cell cannot live on its own, it will die of underpopulation.

To keep a cell alive it must be surrounded by 2 or 3 other cells

![](C:\Users\mark%20van%20der%20veen\AppData\Roaming\marktext\images\2024-09-05-10-52-55-cel_1.png) 



If a cell is surrounded by more than 3 other cells it will die of overpopulation.

![](C:\Users\mark%20van%20der%20veen\AppData\Roaming\marktext\images\2024-09-05-10-53-34-cel_2.png)



Lastly, if a "deadspace" has 3 surrounding cells that space will turn into a live cell

![](C:\Users\mark%20van%20der%20veen\AppData\Roaming\marktext\images\2024-09-05-10-54-27-cel_3.png)



These 3 simple rules are the principle of the Game of Life.



## How to install:

###### !! For this project we used MySQL for our Database, make sure you have the ability to run it. We used XAMPP but there are probably other options available !!

1. Clone the Repository

```bash
git clone https://github.com/Smileanimations/Game-of-Life-.git
```

2. Create a new Database using gameoflife.sql file
   
   (Double check in the connection.php if username and host are set correctly)



## Usage:

You can make individual cells by clicking on the grid, or you can randomize every cell if you press the randomize button.

To start the action simply press start, adjust the speed with the slider and watch how life does its thing.




