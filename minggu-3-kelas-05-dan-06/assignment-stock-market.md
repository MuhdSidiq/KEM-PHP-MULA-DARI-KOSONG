# PHP Assignment - Stock Market Analysis System

## Overview
Practice PHP arrays, foreach loops, HTML tables, and conditional statements using stock market data.

## Given Arrays (DO NOT MODIFY)

```php
<?php
$stocks = [
    ["symbol" => "AAPL", "company" => "Apple Inc", "price" => 175.50, "change" => 2.30, "volume" => 50000000],
    ["symbol" => "GOOGL", "company" => "Alphabet Inc", "price" => 2800.75, "change" => -15.20, "volume" => 25000000],
    ["symbol" => "MSFT", "company" => "Microsoft Corp", "price" => 330.25, "change" => 5.10, "volume" => 35000000],
    ["symbol" => "TSLA", "company" => "Tesla Inc", "price" => 245.80, "change" => -8.45, "volume" => 75000000],
    ["symbol" => "AMZN", "company" => "Amazon.com Inc", "price" => 3200.40, "change" => 12.90, "volume" => 20000000],
    ["symbol" => "META", "company" => "Meta Platforms", "price" => 485.20, "change" => -3.75, "volume" => 45000000],
    ["symbol" => "NVDA", "company" => "NVIDIA Corp", "price" => 875.60, "change" => 25.40, "volume" => 55000000]
];

$portfolios = [
    ["investor" => "Ahmad", "symbol" => "AAPL", "shares" => 100, "buy_price" => 150.00, "sector" => "Technology"],
    ["investor" => "Siti", "symbol" => "GOOGL", "shares" => 50, "buy_price" => 2750.00, "sector" => "Technology"],
    ["investor" => "Kumar", "symbol" => "TSLA", "shares" => 75, "buy_price" => 280.00, "sector" => "Automotive"],
    ["investor" => "Fatimah", "symbol" => "AMZN", "shares" => 25, "buy_price" => 3100.00, "sector" => "E-commerce"],
    ["investor" => "Chen", "symbol" => "META", "shares" => 80, "buy_price" => 500.00, "sector" => "Social Media"]
];
?>
```

## Exercises

### Exercise 1: Stock Data Table
**Task:** Use foreach loop to display all stock data in an HTML table

```php
// Create table with headers: Symbol, Company, Price (RM), Change, Volume
// YOUR CODE HERE
```

### Exercise 2: Portfolio Table  
**Task:** Use foreach loop to display portfolio data in an HTML table

```php
// Create table with headers: Investor, Symbol, Shares, Buy Price, Current Sector
// YOUR CODE HERE
```

### Exercise 3: Stock Performance Analysis
**Task:** Use if-else statements and comparison operators to analyze stock performance

```php
// For each stock:
// - If change > 0, display "Gaining" 
// - If change < 0, display "Losing"
// - If change = 0, display "Stable"
// - If volume <> 50000000, mention volume status
// YOUR CODE HERE
```

### Exercise 4: Portfolio Profit/Loss Analysis
**Task:** Use if-else and comparison operators to calculate profit/loss

```php
// For each portfolio:
// - Calculate current value vs buy value
// - If profit > 1000, display "High Profit"
// - If profit >= 0 and <= 1000, display "Small Profit" 
// - If loss < -1000, display "High Loss"
// - If loss >= -1000 and < 0, display "Small Loss"
// YOUR CODE HERE
```

### Exercise 5: Stock Recommendation System
**Task:** Use switch statement to provide recommendations based on price ranges

```php
// Use switch for price ranges:
// - Price < 200: "Budget Stock"
// - Price 200-500: "Mid-Range Stock"
// - Price 500-1000: "Premium Stock" 
// - Price > 1000: "High-Value Stock"
// - Default: "Price Analysis Needed"
// YOUR CODE HERE
```

### Exercise 6: Sector Classification
**Task:** Use switch statement for investment advice based on sectors

```php
// Use switch for each portfolio sector:
// - "Technology": "High growth potential"
// - "Automotive": "Future mobility focus"
// - "E-commerce": "Digital economy leader"
// - "Social Media": "User engagement critical"
// - Default: "Sector analysis required"
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