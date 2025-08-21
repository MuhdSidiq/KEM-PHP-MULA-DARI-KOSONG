# PHP Assignment - Books Store Management System

## Overview
Practice PHP arrays, foreach loops, HTML tables, and conditional statements using bookstore data.

## Given Arrays (DO NOT MODIFY)

```php
<?php
$books = [
    ["isbn" => "978-0134685991", "title" => "Effective Java", "author" => "Joshua Bloch", "price" => 89.90, "stock" => 25, "genre" => "Programming"],
    ["isbn" => "978-0321125217", "title" => "Domain-Driven Design", "author" => "Eric Evans", "price" => 95.50, "stock" => 8, "genre" => "Software Engineering"],
    ["isbn" => "978-0596517748", "title" => "JavaScript: The Good Parts", "author" => "Douglas Crockford", "price" => 45.80, "stock" => 0, "genre" => "Programming"],
    ["isbn" => "978-0134494166", "title" => "Clean Code", "author" => "Robert Martin", "price" => 78.40, "stock" => 150, "genre" => "Programming"],
    ["isbn" => "978-0201616224", "title" => "The Pragmatic Programmer", "author" => "Andrew Hunt", "price" => 82.30, "stock" => 35, "genre" => "Software Engineering"],
    ["isbn" => "978-1449367404", "title" => "Designing Data-Intensive Applications", "author" => "Martin Kleppmann", "price" => 105.60, "stock" => 12, "genre" => "Database"],
    ["isbn" => "978-0135957059", "title" => "The Phoenix Project", "author" => "Gene Kim", "price" => 68.75, "stock" => 45, "genre" => "DevOps"]
];

$orders = [
    ["order_id" => "ORD001", "customer" => "Ahmad Fauzi", "isbn" => "978-0134685991", "quantity" => 2, "order_date" => "2024-01-15", "status" => "Delivered"],
    ["order_id" => "ORD002", "customer" => "Siti Aminah", "isbn" => "978-0321125217", "quantity" => 1, "order_date" => "2024-01-18", "status" => "Processing"],
    ["order_id" => "ORD003", "customer" => "Kumar Krishnan", "isbn" => "978-0596517748", "quantity" => 3, "order_date" => "2024-01-20", "status" => "Cancelled"],
    ["order_id" => "ORD004", "customer" => "Fatimah Noor", "isbn" => "978-0134494166", "quantity" => 1, "order_date" => "2024-01-22", "status" => "Shipped"],
    ["order_id" => "ORD005", "customer" => "Chen Ming", "isbn" => "978-0201616224", "quantity" => 2, "order_date" => "2024-01-25", "status" => "Pending"],
    ["order_id" => "ORD006", "customer" => "Raj Kumar", "isbn" => "978-1449367404", "quantity" => 1, "order_date" => "2024-01-28", "status" => "Delivered"]
];
?>
```

## Exercises

### Exercise 1: Book Catalog Table
**Task:** Use foreach loop to display all book data in an HTML table

```php
// Create table with headers: ISBN, Title, Author, Price (RM), Stock, Genre
// YOUR CODE HERE
```

### Exercise 2: Customer Orders Table  
**Task:** Use foreach loop to display order data in an HTML table

```php
// Create table with headers: Order ID, Customer, ISBN, Quantity, Order Date, Status
// YOUR CODE HERE
```

### Exercise 3: Inventory Stock Analysis
**Task:** Use if-else statements and comparison operators to analyze book inventory

```php
// For each book:
// - If stock > 100, display "High Inventory" 
// - If stock >= 50 and stock <= 100, display "Good Stock"
// - If stock >= 10 and stock < 50, display "Medium Stock"
// - If stock > 0 and stock < 10, display "Low Stock"
// - If stock = 0, display "Out of Stock"
// - Check if price <> 80.00 and mention pricing tier
// YOUR CODE HERE
```

### Exercise 4: Pricing Category Analysis
**Task:** Use if-else and comparison operators to categorize books by price

```php
// For each book:
// - If price > 100, display "Premium Book"
// - If price >= 70 and price <= 100, display "Standard Book" 
// - If price >= 40 and price < 70, display "Budget Book"
// - If price < 40, display "Economy Book"
// - If stock <> 25, mention inventory status
// YOUR CODE HERE
```

### Exercise 5: Genre Classification
**Task:** Use switch statement to provide genre-specific information

```php
// Use switch for each book genre:
// - "Programming": "Technical skills development"
// - "Software Engineering": "System design and architecture"
// - "Database": "Data management and analysis"
// - "DevOps": "Operations and deployment practices"
// - "Web Development": "Frontend and backend technologies"
// - Default: "General technology book"
// YOUR CODE HERE
```

### Exercise 6: Order Status Management
**Task:** Use switch statement to handle different order statuses

```php
// Use switch for each order status:
// - "Pending": "Awaiting payment confirmation"
// - "Processing": "Order being prepared for shipment"
// - "Shipped": "Package in transit to customer"
// - "Delivered": "Order completed successfully"
// - "Cancelled": "Order cancelled, process refund"
// - Default: "Status requires investigation"
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