<?php

if ($_POST) { 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
    echo "<h2>Calculation Result</h2>";
    echo "<p>$result</p>";
    echo "<a href='kira-kira.php'>Calculate Again</a>";

} else {

    echo "<h2>Calculation Result</h2>";
    echo "<p>No calculation performed</p>";
    echo "<a href='kira-kira.php'>Calculate Again</a>";
}


?>


<html>
    <head>
        <title>Kira Kira</title>
    </head>
    <body>
        <h1>Kira Kira</h1>

        <form action="kira-kira.php" method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>
            <button type="submit">Calculate</button>
        </form>

    </body>
</html>