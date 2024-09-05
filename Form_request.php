<?php 
include "connection.php";

    $name = $_POST['patternname']; 
    $image= $_POST['image']; 
    $details = $_POST['descofpattern']; 

    var_dump($_FILES);

    // Create insert query and insert the new user
$sql = "INSERT INTO patterns (title, details) VALUES (:title, :details)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':title', $name);
$stmt->bindParam(':details', $details);

// feedback on error
if (false === $stmt->execute()) {
    exit("DB error: " . $stmt->errorInfo()[2] . "\n");
}
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
