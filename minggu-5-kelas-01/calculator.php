<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $result = $num1 + $num2;
    
    echo "<h2>Calculation Result</h2>";
    echo "<p>$num1 + $num2 = $result</p>";
    echo "<a href='index.php'>Calculate Again</a>";
} else {
?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form action="index.php" method="POST">
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>

        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>

        <button type="submit">Calculate Sum</button>
    </form>
</body>

</html>
<?php
}
?>