<!--
Task 3: Grade Calculator

Develop a PHP script named grade_calculator.php that computes the average of
three test scores and determines the corresponding letter grade.
Create a form where the user can input three test scores. Calculate
 the average and display it along with the corresponding grade (A, B, C, D, F).
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grade Calculator</title>
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
    <h3>Grade Calculator</h3>
    <form method="post" action="">
        <input type="number" name="score1" placeholder="Enter test Score 1" required><br>
        <input type="number" name="score2" placeholder="Enter test Score 2" required><br>
        <input type="number" name="score3" placeholder="Enter test Score 3" required><br>
        <button type="submit">Calculate</button>
    </form>
    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];

            $average = ($score1 + $score2 + $score3)/3;

            $grade = 0;
            if($average >= 90){
                $grade = "A";
            }
            else if($average >= 80){
                $grade = "B";
            }
            else if($average >= 70){
                $grade = "C";
            }
            else if($average >= 60){
                $grade = "D";
            }
            else{
                $grade = "F";
            }


            // Result
            echo "<h3>Results:</h3>";
            echo "Average Score: $average<br>";
            echo "Grade: $grade";
        }
        ?>
    </div>
</div>
</body>
</html>