<?php
declare(strict_types=1);

include_once('connection.php');

session_start();

$sql = "SELECT * FROM patterns";
$stmt = $conn->query($sql);
$patterns = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conway's Game of Life</title>
    <link rel="stylesheet" href="Life.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Press+Start+2P&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page">
        <div id="rules">
            <h3 class="ruletext">Rules:</h3>
            <p class="ruletext">Conway's Game of Life, conceptualized by John Conway, is a cellular automaton
            that simulates the expansion/implosion of populations according to a simple set of rules. The rules are as follows:

            </p>
            <p> 1. If a cell is surrounded by 2 or 3 colored neighboring cells, that cell itself remains colored, 
                as in the example below.

            </p>
            <img src="Info_afbeeldingen/cel_1.png">
            <p> In this image the middle cell remains colored, because the cell is surrounded by 2 other colored cells.

            </p>
            <p> 2. If a cell is surrounded by 4 or more colored neighboring cells, that cell dies from 'overcrowding' 
                (that is, the cell turns white).</p>
            <p> If a cell is surrounded by less than two colored neighboring cells,
                this cell also dies, but then from loneliness. See example below.

            </p>
                <img src="Info_afbeeldingen/cel_2.png">
            <p> In this image the middle cell dies because the cell is surrounded by more than 3 or less than 2 colored cells.

            </p>
            <p> 3. If a dead cell is surrounded by exactly 3 colored neighboring cells, 
                this dead cell is also colored ('born'), as in the example below.

            </p>
            <img src="Info_afbeeldingen/cel_3.png">
            <p> In this image the middle cell is born, because the cell is surrounded by exactly 3 colored cells.

            </p>
        </div>
        <div id="lifegame">
            <div id="header">
                <h1>Conway's Game of Life</h1>
            </div>
            <!--Niks in de grid div plaatsen dit bevat, no surprise: de grid-->
            <div id="grid"></div>
            <div id="buttons">
                <button id="start-btn" class="buttons">Start</button>
                <button id="stop-btn" class="buttons">Stop</button>
                <button id="random-btn" class="buttons">Randomize</button>
                <button id="reset-btn" class="buttons">Reset</button>
            </div>
            <div class="slidecontainer" id="slider">
                <input type="range" min="10" max="100" value="80" class="slider" id="speed-slider">
                <span id="speed-value"></span>
            </div>
        </div>
        <div id="legend">
            <p>Young</p>
            <div id="legendbox"></div>
            <p>Old</p>
        </div>
    </div>
    <script src="Life.js"></script>
    <h1 class="title">Info</h1>
    <div>
      <table>
            <?php 
            $i = 0;
                foreach ($patterns as $index => $pattern) { 
                    if ($i++ % 3 == 0) {
                        echo "<tr>";
                    }?>
                        <td><?= $pattern["title"] ?></td>
                        <td><img src="images/<?php echo $pattern['title']?>.png" alt="" class="icons"></td>
                        <td><?= $pattern["details"] ?></td>
            <?php } 
            echo "</tr>"?>
      </table>
    </div>
    <div>
        <h2 class="title">Submit pattern</h2>
    </div>
</body>

</html>
