<!DOCTYPE html>
<html>
<head>
    <title>Celsius to Fahrenheit</title>
</head>
<body>
    <h2>Convert Celsius to Fahrenheit</h2>
    <form method="post">
        Enter temperature in Celsius: <input type="number" name="celsius" step="0.1" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<p>$celsius °C = <strong>$fahrenheit °F</strong></p>";
    }
    ?>
</body>
</html>
