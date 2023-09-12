<!--
Task 2: Temperature Converter

Design a PHP program called temperature_converter.php that converts
temperatures between Celsius and Fahrenheit. Provide a form where the user
 can input a temperature value and select the conversion direction
(Celsius to Fahrenheit or vice versa). Display the converted temperature.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Temperature Converter</title>
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
        .displayResult{
            background: green;
            padding: 3px 10px;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Temperature Converter</h3>
    <form method="post" action="">
        <input type="number" name="temperature" placeholder="Enter Temperature" required><br>
        <select name="operation">
            <option value="celsisuToFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
        </select><br>
        <button type="submit">Calculate</button>
    </form>
    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $operation = $_POST["operation"];
            $result = 0;

            if ($operation == "celsisuToFahrenheit") {
                $result = ($temperature * 9/5) + 32;
                echo "<p>Result: $temperature &deg;C is <span class='displayResult'> $result &deg;F </span></p>";
            } else if ($operation == "fahrenheitToCelsius") {
                $result = ($temperature - 32) * 5/9;
                echo "<p>Result: $temperature &deg;F is <span class='displayResult'> $result &deg;C </span></p>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>