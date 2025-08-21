# PHP Assignment - Human Resource Management System

## Overview
Practice PHP arrays, foreach loops, HTML tables, and conditional statements using HR data.

## Given Arrays (DO NOT MODIFY)

```php
<?php
$employees = [
    ["id" => "EMP001", "name" => "Ahmad Ibrahim", "position" => "Manager", "salary" => 6500, "department" => "IT", "years" => 5],
    ["id" => "EMP002", "name" => "Siti Nurhaliza", "position" => "Developer", "salary" => 4800, "department" => "IT", "years" => 3],
    ["id" => "EMP003", "name" => "Kumar Raj", "position" => "Analyst", "salary" => 4200, "department" => "Finance", "years" => 2],
    ["id" => "EMP004", "name" => "Fatimah Ali", "position" => "HR Officer", "salary" => 3900, "department" => "HR", "years" => 4],
    ["id" => "EMP005", "name" => "Chen Wei Ming", "position" => "Designer", "salary" => 4500, "department" => "Marketing", "years" => 6],
    ["id" => "EMP006", "name" => "Raj Kumar", "position" => "Accountant", "salary" => 4000, "department" => "Finance", "years" => 1]
];

$attendance = [
    ["employee_id" => "EMP001", "month" => "January", "present_days" => 22, "total_days" => 23, "overtime_hours" => 15],
    ["employee_id" => "EMP002", "month" => "January", "present_days" => 21, "total_days" => 23, "overtime_hours" => 8],
    ["employee_id" => "EMP003", "month" => "January", "present_days" => 20, "total_days" => 23, "overtime_hours" => 5],
    ["employee_id" => "EMP004", "month" => "January", "present_days" => 23, "total_days" => 23, "overtime_hours" => 12],
    ["employee_id" => "EMP005", "month" => "January", "present_days" => 19, "total_days" => 23, "overtime_hours" => 3],
    ["employee_id" => "EMP006", "month" => "January", "present_days" => 22, "total_days" => 23, "overtime_hours" => 10]
];
?>
```

## Exercises

### Exercise 1: Employee Directory Table
**Task:** Use foreach loop to display all employee data in an HTML table

```php
// Create table with headers: ID, Name, Position, Salary (RM), Department, Years
// YOUR CODE HERE
```

### Exercise 2: Attendance Report Table  
**Task:** Use foreach loop to display attendance data in an HTML table

```php
// Create table with headers: Employee ID, Month, Present Days, Total Days, Overtime Hours
// YOUR CODE HERE
```

### Exercise 3: Salary Grade Analysis
**Task:** Use if-else statements and comparison operators to analyze salary levels

```php
// For each employee:
// - If salary >= 6000, display "Senior Level" 
// - If salary >= 4500 and salary < 6000, display "Mid Level"
// - If salary >= 3500 and salary < 4500, display "Junior Level"
// - If salary < 3500, display "Entry Level"
// - Check if years <> 3 and mention experience status
// YOUR CODE HERE
```

### Exercise 4: Attendance Performance Analysis
**Task:** Use if-else and comparison operators to evaluate attendance

```php
// For each attendance record:
// - Calculate attendance percentage
// - If attendance > 95%, display "Excellent"
// - If attendance >= 90% and <= 95%, display "Good" 
// - If attendance >= 80% and < 90%, display "Average"
// - If attendance < 80%, display "Poor"
// - If overtime_hours = 0, mention "No overtime"
// YOUR CODE HERE
```

### Exercise 5: Position Classification
**Task:** Use switch statement to categorize positions by level

```php
// Use switch for each position:
// - "Manager": "Leadership Role"
// - "Developer": "Technical Role"
// - "Analyst": "Analytical Role" 
// - "Designer": "Creative Role"
// - "HR Officer": "Administrative Role"
// - "Accountant": "Financial Role"
// - Default: "General Position"
// YOUR CODE HERE
```

### Exercise 6: Department Workflow
**Task:** Use switch statement for department-specific processes

```php
// Use switch for each department:
// - "IT": "Technology development and support"
// - "Finance": "Financial planning and analysis"
// - "HR": "Employee management and recruitment"
// - "Marketing": "Brand promotion and campaigns"
// - Default: "General department operations"
// YOUR CODE HERE
```

## Grading Criteria
- Foreach loops (20 points)
- HTML table formatting (15 points)
- If-else implementation (20 points)
- Comparison operators (15 points)
- Switch statements (20 points)
- Code organization (10 points)

**Total: 100 points**