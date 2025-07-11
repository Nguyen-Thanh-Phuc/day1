<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Calculate Factorial</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        echo "<p>Factorial of $n is <strong>$factorial</strong></p>";
    }
    ?>
</body>
</html>
