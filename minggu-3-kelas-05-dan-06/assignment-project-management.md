# PHP Assignment - Project Management System

## Overview
Practice PHP arrays, foreach loops, HTML tables, and conditional statements using project management data.

## Given Arrays (DO NOT MODIFY)

```php
<?php
$projects = [
    ["id" => "PRJ001", "name" => "E-Commerce Website", "status" => "In Progress", "budget" => 50000, "completion" => 75, "priority" => "High"],
    ["id" => "PRJ002", "name" => "Mobile App Development", "status" => "Planning", "budget" => 80000, "completion" => 15, "priority" => "Medium"],
    ["id" => "PRJ003", "name" => "Database Migration", "status" => "Completed", "budget" => 25000, "completion" => 100, "priority" => "High"],
    ["id" => "PRJ004", "name" => "Security Audit", "status" => "On Hold", "budget" => 15000, "completion" => 40, "priority" => "Low"],
    ["id" => "PRJ005", "name" => "Cloud Infrastructure", "status" => "In Progress", "budget" => 120000, "completion" => 60, "priority" => "High"],
    ["id" => "PRJ006", "name" => "API Development", "status" => "Testing", "budget" => 35000, "completion" => 85, "priority" => "Medium"],
    ["id" => "PRJ007", "name" => "UI/UX Redesign", "status" => "Planning", "budget" => 40000, "completion" => 5, "priority" => "Low"]
];

$team_assignments = [
    ["project_id" => "PRJ001", "team_member" => "Ahmad Rahman", "role" => "Project Manager", "hours_allocated" => 160, "department" => "IT"],
    ["project_id" => "PRJ002", "team_member" => "Siti Aishah", "role" => "Developer", "hours_allocated" => 200, "department" => "Development"],
    ["project_id" => "PRJ003", "team_member" => "Kumar Selvam", "role" => "Database Admin", "hours_allocated" => 120, "department" => "IT"],
    ["project_id" => "PRJ004", "team_member" => "Fatimah Zahra", "role" => "Security Analyst", "hours_allocated" => 80, "department" => "Security"],
    ["project_id" => "PRJ005", "team_member" => "Chen Li Wei", "role" => "DevOps Engineer", "hours_allocated" => 240, "department" => "Operations"],
    ["project_id" => "PRJ006", "team_member" => "Raj Patel", "role" => "Backend Developer", "hours_allocated" => 180, "department" => "Development"]
];
?>
```

## Exercises

### Exercise 1: Project Overview Table
**Task:** Use foreach loop to display all project data in an HTML table

```php
// Create table with headers: ID, Project Name, Status, Budget (RM), Completion (%), Priority
// YOUR CODE HERE
```

### Exercise 2: Team Assignment Table  
**Task:** Use foreach loop to display team assignment data in an HTML table

```php
// Create table with headers: Project ID, Team Member, Role, Hours Allocated, Department
// YOUR CODE HERE
```

### Exercise 3: Budget Analysis
**Task:** Use if-else statements and comparison operators to analyze project budgets

```php
// For each project:
// - If budget > 100000, display "Large Scale Project" 
// - If budget >= 50000 and budget <= 100000, display "Medium Scale Project"
// - If budget >= 20000 and budget < 50000, display "Small Scale Project"
// - If budget < 20000, display "Micro Project"
// - Check if completion <> 50 and mention progress status
// YOUR CODE HERE
```

### Exercise 4: Project Completion Analysis
**Task:** Use if-else and comparison operators to evaluate project progress

```php
// For each project:
// - If completion = 100, display "Project Completed"
// - If completion >= 80 and completion < 100, display "Near Completion" 
// - If completion >= 50 and completion < 80, display "Good Progress"
// - If completion >= 20 and completion < 50, display "Early Stage"
// - If completion < 20, display "Just Started"
// - If hours_allocated <> 160, mention resource allocation status
// YOUR CODE HERE
```

### Exercise 5: Project Status Management
**Task:** Use switch statement to provide status-specific actions

```php
// Use switch for each project status:
// - "Planning": "Finalize requirements and timeline"
// - "In Progress": "Monitor progress and manage resources"
// - "Testing": "Conduct quality assurance and bug fixes"
// - "On Hold": "Review blockers and reassess priorities" 
// - "Completed": "Document lessons learned and archive"
// - Default: "Status review required"
// YOUR CODE HERE
```

### Exercise 6: Role Responsibility Matrix
**Task:** Use switch statement to define role responsibilities

```php
// Use switch for each team member role:
// - "Project Manager": "Coordinate team and manage timeline"
// - "Developer": "Code implementation and testing"
// - "Database Admin": "Data management and optimization"
// - "Security Analyst": "Security assessment and compliance"
// - "DevOps Engineer": "Infrastructure and deployment"
// - "Backend Developer": "Server-side development"
// - Default: "General project support"
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