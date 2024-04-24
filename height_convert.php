<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kilometers = $_POST['kilometers'] ?? 0;
    $meters = $kilometers * 1000; 
    echo "<p>{$kilometers} km is equivalent to {$meters} m.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Height Converter</title>
</head>
<body>
    <h1>Height Converter</h1>
    <form action="height_converter.php" method="post">
        <label for="kilometers">Enter height in kilometers (km):</label>
        <input type="number" id="kilometers" name="kilometers" required>
        <button type="submit">Convert to Meters</button>
    </form>
    <p><a href="index.php">Back to Home</a></p>
</body>
</html>