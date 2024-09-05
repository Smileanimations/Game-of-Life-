<?php 
    $name = $_POST['patternname']; 
    $image= $_POST['image']; 
    $details = $_POST['descofpattern']; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="Life.css">

<body>
    <div class="container">
        <div class="column">
        <a href="Life.php">&crarr;Back</a>
        "<?= $name; ?>" has been added!<br>
        </div>
    </div>
</body>
</html>
