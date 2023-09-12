<!--
Task 4: Even or Odd Checker

Build a PHP program called even_odd_checker.php that checks whether
a given number is even or odd. Provide an input field where the user can
enter a number. Display a message indicating whether the number is even or odd.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Even or Odd Checker</title>
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
    <h3>Even or Odd Checker</h3>
    <form method="post" action="">
        <input type="number" name="number" placeholder="Enter number" required><br>
        <button type="submit">Calculate</button>
    </form>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];


            if($number % 2 == 0){
                $result = "The number $number is even.";
            }
            else{
                $result = "The number $number is odd.";
            }

            // Result
            echo "<h3>Results:</h3>";
            echo $result;
        }
        ?>
    </div>
</div>
</body>
</html>