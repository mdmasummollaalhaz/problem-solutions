<!--
Task 6: Comparison Tool

Develop a PHP tool named comparison_tool.php that compares two numbers
and displays the larger one using the ternary operator.
Create a form where the user can input two numbers. Use the ternary
operator to determine the larger number and display the result.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comparison Tool</title>
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
    <h3>Comparison Tool</h3>
    <form method="post" action="">
        <input type="number" name="number1" placeholder="Enter number 1" required><br>
        <input type="number" name="number2" placeholder="Enter number 2" required><br>
        <button type="submit">Calculate</button>
    </form>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];

            $result = ($number1 > $number2) ? $number1 : $number2;

            // Result
            echo "<h3>Results:</h3>";
            echo "The larger number is: $result";
        }
        ?>
    </div>
</div>
</body>
</html>