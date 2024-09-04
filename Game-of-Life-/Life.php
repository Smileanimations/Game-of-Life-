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
            <h3 class="ruletext">Info:</h3>
            <p class="ruletext">Conway's Game of Life, geconceptualiseerd door John Conway, is een cellulaire automaton
                die volgens een simpele set regels de uitbreiding/implosie van populaties simuleert. De regels zijn als
                volgt:

            </p>
            <p> 1. Als een cel door 2 of 3 gekleurde buurcellen omgeven wordt, blijft deze cel zelf ook gekleurd, zoals
                in het voorbeeld hieronder.

            </p>
            <img src="Info_afbeeldingen/cel_1.png">
            <p> deze afbeelding blijft de middelste cel gekleurd, want de cel wordt omgeven door 2 andere gekleurde
                cellen.

            </p>
            <p> 2. Als een cel door 4 of meer gekleurde buurcellen omgeven wordt, gaat deze cel dood door
                'overbevolking' (dat wil zeggen, de cel wordt wit).</p>
            <p> Als een cel door minder dan twee gekleurde buurcellen omgeven wordt,
                gaat deze cel ook dood, maar dan door eenzaamheid. Zie voorbeeld hieronder.

            </p>
                <img src="Info_afbeeldingen/cel_2.png">
            <p> deze afbeelding gaat de middelste cel dood, want de cel wordt door meer dan 3 of minder dan 2
                gekleurde cellen omgeven.

            </p>
            <p> 3. Als een dode cel wordt omgeven door precies 3 gekleurde buurcellen, wordt deze dode cel ook gekleurd
                ('geboren'), zoals in het voorbeeld hieronder.

            </p>
            <img src="Info_afbeeldingen/cel_3.png">
            <p> deze afbeelding wordt de middelste cel geboren, want de cel wordt door exact 3 gekleurde cellen
                omgeven.

            </p>
        </div>
        <h1 class="title" style="color: black;">Currently registered crew members</h1>
    <div>
      <table>
        <thead>
          <tr>
            <th>Appearance</th>
            <th>Name</th>
            <th>Details</th>
          </tr>
        </thead>
        <?php foreach ($patterns as $index => $pattern) { ?>
          <tr>
            <td><img src="images/<?php echo $pattern['title']?>.png" alt="" class="icons"></td>
            <td><?= $pattern["title"] ?></td>
            <td><?= $pattern["details"] ?></td>
          </tr>
        <?php } ?>
      </table>
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
                <input type="range" min="10" max="100" value="10" class="slider" id="speed-slider">
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

</body>

</html>
