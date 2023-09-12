<!--
Task 7: Simple Calculator


Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations.
Provide input fields for two numbers and a dropdown to select the
operation (addition, subtraction, multiplication, division).
Display the result of the chosen operation.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Calculator</title>
    <style>
        *{
            margin-top: 20px;
        }
        .container {
            display: block;
            padding: 20px;
            margin: 0px 300px;
            box-shadow: 4px 5px 20px 2px #0000005c;
            border-radius: 5px;
        }
        .container form , input, select, button{
            padding: 5px 20px;
            margin-bottom: 2px;;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter First Number" required><br>
        <input type="number" name="num2" placeholder="Enter Second Number" required><br>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br>
        <button type="submit">Calculate</button>
    </form>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    echo "Result: $result";
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    echo "Result: $result";
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    echo "Result: $result";
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result: $result";
                    } else {
                        echo "Division by zero is not allowed";
                    }
                    break;
            }
        }
        ?>
    </div>
</div>
</body>
</html>