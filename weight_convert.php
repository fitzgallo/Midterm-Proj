<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kilograms = $_POST['kilograms'] ?? 0;
    $milligrams = $kilograms * 1000000; 
    echo "<p>{$kilograms} kg is equivalent to {$milligrams} mg.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weight Converter</title>
</head>
<body>
    <h1>Weight Converter</h1>
    <form action="weight_converter.php" method="post">
        <label for="kilograms">Enter weight in kilograms (kg):</label>
        <input type="number" id="kilograms" name="kilograms" required>
        <button type="submit">Convert to Milligrams</button>
    </form>
    <p><a href="index.php">Back to Home</a></p>
</body>
</html>