<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
        $isPrime = true;

        if ($n < 2) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        echo "<p>$n is " . ($isPrime ? "<strong>Prime</strong>" : "<strong>Not Prime</strong>") . "</p>";
    }
    ?>
</body>
</html>
