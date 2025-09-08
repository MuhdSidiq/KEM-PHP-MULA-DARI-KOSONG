<?php
$people = [
    ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 25],
    ['first_name' => 'Jane', 'last_name' => 'Smith', 'age' => 30],
    ['first_name' => 'Mike', 'last_name' => 'Johnson', 'age' => 35],
    ['first_name' => 'Sarah', 'last_name' => 'Williams', 'age' => 28],
    ['first_name' => 'David', 'last_name' => 'Brown', 'age' => 42]
];

if ($_GET) {
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    
    $found = false;
    foreach ($people as $person) {
        if ($person['first_name'] == $first_name && $person['last_name'] == $last_name) {
            echo "<h2>Person Found</h2>";
            echo "<p>Name: {$person['first_name']} {$person['last_name']}</p>";
            echo "<p>Age: {$person['age']} years old</p>";
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        echo "<h2>Person Not Found</h2>";
        echo "<p>No person found with name: $first_name $last_name</p>";
    }
    
    echo "<a href='lookup.php'>Search Again</a>";
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Person Lookup</title>
</head>
<body>
    <h2>Person Age Lookup</h2>
    <form action="lookup.php" method="GET">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        
        <button type="submit">Find Age</button>
    </form>
    
    <h3>Available People:</h3>
    <ul>
        <li>John Doe</li>
        <li>Jane Smith</li>
        <li>Mike Johnson</li>
        <li>Sarah Williams</li>
        <li>David Brown</li>
    </ul>
</body>
</html>
<?php
}
?>