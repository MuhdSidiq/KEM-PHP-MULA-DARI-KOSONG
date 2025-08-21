<?php
// PHP Assignment: Arrays, Foreach, Tables, and Conditional Statements

echo "<h1>PHP Assignment - Arrays and Control Structures</h1>";

// Part 1: Given Arrays - DO NOT MODIFY THESE
$students = [
    ["name" => "Ahmad", "age" => 20, "grade" => 85, "city" => "Kuala Lumpur"],
    ["name" => "Siti", "age" => 19, "grade" => 92, "city" => "Penang"],
    ["name" => "Kumar", "age" => 21, "grade" => 78, "city" => "Johor Bahru"],
    ["name" => "Fatimah", "age" => 22, "grade" => 88, "city" => "Kota Kinabalu"],
    ["name" => "Chen Wei", "age" => 20, "grade" => 95, "city" => "Kuching"]
];

$products = [
    ["name" => "Laptop", "price" => 2500, "category" => "Electronics", "stock" => 15],
    ["name" => "Book", "price" => 25, "category" => "Education", "stock" => 100],
    ["name" => "Phone", "price" => 800, "category" => "Electronics", "stock" => 8],
    ["name" => "Desk", "price" => 350, "category" => "Furniture", "stock" => 25],
    ["name" => "Headphones", "price" => 120, "category" => "Electronics", "stock" => 3]
];

echo "<hr>";

// EXERCISE 1: Use foreach to populate student data into an HTML table
echo "<h2>Exercise 1: Student Data Table</h2>";
echo "<p><strong>Task:</strong> Use foreach loop to display all student data in an HTML table</p>";

// YOUR CODE HERE - Create a table with headers: Name, Age, Grade, City
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th>Name</th><th>Age</th><th>Grade</th><th>City</th>";
echo "</tr>";

// TODO: Write foreach loop here to populate table rows

echo "</table>";

echo "<hr>";

// EXERCISE 2: Use foreach to populate product data into an HTML table  
echo "<h2>Exercise 2: Product Data Table</h2>";
echo "<p><strong>Task:</strong> Use foreach loop to display all product data in an HTML table</p>";

// YOUR CODE HERE - Create a table with headers: Product Name, Price (RM), Category, Stock

echo "<hr>";

// EXERCISE 3: Using comparison operators (<>, =, >, <) with if-else statements
echo "<h2>Exercise 3: Grade Analysis with If-Else</h2>";
echo "<p><strong>Task:</strong> Use if-else statements and comparison operators to analyze student grades</p>";

// YOUR CODE HERE
// For each student:
// - If grade >= 90, display "Excellent" 
// - If grade >= 80 and grade < 90, display "Good"
// - If grade >= 70 and grade < 80, display "Average" 
// - If grade < 70, display "Needs Improvement"
// - Also check if student age <> 20 (not equal to 20) and mention it

echo "<hr>";

// EXERCISE 4: Using comparison operators with product stock
echo "<h2>Exercise 4: Stock Status Analysis</h2>";
echo "<p><strong>Task:</strong> Use if-else and comparison operators to check product stock levels</p>";

// YOUR CODE HERE
// For each product:
// - If stock > 50, display "High Stock"
// - If stock >= 10 and stock <= 50, display "Medium Stock" 
// - If stock < 10 and stock > 0, display "Low Stock"
// - If stock = 0, display "Out of Stock"
// - Use <> operator to check if price is not equal to 25

echo "<hr>";

// EXERCISE 5: Switch statement for categorizing students by age groups
echo "<h2>Exercise 5: Age Group Classification with Switch</h2>";
echo "<p><strong>Task:</strong> Use switch statement to categorize students by age groups</p>";

// YOUR CODE HERE
// Use switch statement to categorize each student:
// - Age 18-19: "Freshman"
// - Age 20-21: "Sophomore" 
// - Age 22-23: "Junior"
// - Age 24+: "Senior"
// - Default: "Unknown"

echo "<hr>";

// EXERCISE 6: Switch statement for product categories
echo "<h2>Exercise 6: Product Category Actions with Switch</h2>";
echo "<p><strong>Task:</strong> Use switch statement to suggest actions based on product categories</p>";

// YOUR CODE HERE  
// Use switch statement for each product category:
// - "Electronics": "Check warranty and tech specs"
// - "Education": "Verify educational content quality"
// - "Furniture": "Check assembly requirements"
// - "Clothing": "Check size availability"
// - Default: "General product review needed"

echo "<hr>";

// BONUS EXERCISE: Combined operations
echo "<h2>Bonus Exercise: Combined Operations</h2>";
echo "<p><strong>Task:</strong> Combine foreach, if-else, and switch in one complex operation</p>";

// YOUR CODE HERE
// Create a student report that:
// 1. Uses foreach to go through each student
// 2. Uses if-else to determine if they pass (grade >= 75)
// 3. Uses switch to assign them to study groups based on their city
// 4. Uses comparison operators to check various conditions

?>

<!-- 
ASSIGNMENT INSTRUCTIONS:
======================

1. Complete all exercises by writing PHP code where indicated with "YOUR CODE HERE"

2. For foreach loops:
   - Use the syntax: foreach($array as $item) { }
   - Access array elements using: $item['key_name']

3. For comparison operators, use:
   - = for assignment
   - == for equality comparison  
   - != or <> for not equal
   - >, <, >=, <= for numeric comparisons

4. For if-else statements:
   - Use proper syntax: if (condition) { } elseif (condition) { } else { }
   
5. For switch statements:
   - Use proper syntax: switch($variable) { case 'value': break; default: }
   - Don't forget break; statements

6. Test your code by running this PHP file in a web browser or command line

7. Make sure all HTML tables are properly formatted with borders and headers

GRADING CRITERIA:
================
- Correct use of foreach loops (20 points)
- Proper HTML table generation (15 points)  
- Correct if-else implementation (20 points)
- Proper use of comparison operators (15 points)
- Correct switch statement usage (20 points)
- Code organization and comments (10 points)

Total: 100 points
-->