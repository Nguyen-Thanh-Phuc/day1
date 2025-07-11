<!DOCTYPE html>
<html>
<head>
    <title>Check Even or Odd</title>
</head>
<body>
    <h2>Check if a Number is Even or Odd</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number % 2 == 0) {
            echo "<p>$number is <strong>Even</strong></p>";
        } else {
            echo "<p>$number is <strong>Odd</strong></p>";
        }
    }
    ?>
</body>
</html>
