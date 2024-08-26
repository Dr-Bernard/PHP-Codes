<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Simple Calculator</h1>
        <form action="StdCalculator.php" method="post">
            <label for="num1">First Number:</label>
            <input type="number" id="num1" name="num1" required>
            
            <label for="num2">Second Number:</label>
            <input type="number" id="num2" name="num2" required>
            
            <label for="operation">Operation:</label>
            <select id="operation" name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
            $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
            $operation = filter_input(INPUT_POST, 'operation', FILTER_SANITIZE_STRING);

            if ($num1 !== false && $num2 !== false) {
                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        break;
                    case 'subtract':
                        $result = $num1 - $num2;
                        break;
                    case 'multiply':
                        $result = $num1 * $num2;
                        break;
                    case 'divide':
                        $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
                        break;
                    default:
                        $result = "Invalid operation";
                }
                echo "<p>Result: " . htmlspecialchars($result) . "</p>";
            } else {
                echo "<p>Please enter valid numbers.</p>";
            }
        }
        ?>
    </main>
</body>
</html>