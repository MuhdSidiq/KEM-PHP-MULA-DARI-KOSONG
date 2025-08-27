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

echo "<table border='1'>";
echo "<tr><th>Symbol</th><th>Company</th><th>Price</th><th>Change</th><th>Volume</th><th>Status</th><th>Stock Quality</th></tr>";

foreach ($stocks as $stock) {

    $status = "";
    if ($stock["change"] > 0) {
        $status = "gaining";
    } else if ($stock["change"] < 0) {
        $status = "losing";
    } else if ($stock["change"] == 0) {
        $status = "stable";
    }

    $StockQuality = $stock["price"];

    switch ($StockQuality) {

        case $stock["price"] < 200:
            $remarks = "Budget Stock";
            break;
        case $stock["price"] >= 200 and $stock["price"] <= 500:
            $remarks = "Mid-Range Stock";

        case $stock["price"] >= 500 and $stock["price"] <= 1000:
            $remarks = "Premium Stock";
            break;
        case $stock["price"] > 1000:
            $remarks = "High-Value Stock";
            break;
        default:
            $remarks = "Price Analysis Needed";
    }





    echo "<tr>";
    echo "<td>" . $stock["symbol"] . "</td>";
    echo "<td>" . $stock["company"] . "</td>";
    echo "<td>" . $stock["price"] . "</td>";
    echo "<td>" . $stock["change"] . "</td>";
    echo "<td>" . $stock["volume"] . "</td>";
    echo "<td>" . $status . "</td>";
    echo "<td>" . $remarks . "</td>";
    echo "<td>" . $StockQuality . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h2>Portfolio Details</h2>";
echo "<table border='1'>";
echo "<tr>
        <th>Investor</th>
        <th>Symbol</th>
        <th>Shares</th>
        <th>Buy Price</th>
        <th>Sector</th>
        <th>Buy Value</th>
        <th>Current Value</th>
        <th>Profit/Loss</th>
        <th>Remarks</th>
</tr>";

foreach ($portfolios as $portfolio) {
    
    $current_value = $stock["price"] * $portfolio["shares"];

    $buy_value = $portfolio["buy_price"] * $portfolio["shares"];

    $profit_loss = $current_value - $buy_value;

    foreach ($stocks as $stock) {
        if ($stock["symbol"] === $portfolio["symbol"]) {
            $current_value = $stock["price"] * $portfolio["shares"];
            break;
        }
    }

    $profit_loss = $current_value - $buy_value;


    if ($profit_loss > 1000) {
        $remarks = "High Profit";
    } else if ($profit_loss >= 0 and $profit_loss <=1000) {
        $remarks = "Small Profit";
    } else if ($profit_loss < -1000) {
        $remarks = "High Loss";
    } else if ($profit_loss >= -1000 and $profit_loss <= 0) {
        $remarks = "Small Loss";
    } else {
        $remarks = "No Change";
    }

    
    echo "<tr>";
    echo "<td>" . $portfolio["investor"] . "</td>";
    echo "<td>" . $portfolio["symbol"] . "</td>";
    echo "<td>" . $portfolio["shares"] . "</td>";
    echo "<td>" . $portfolio["buy_price"] . "</td>";
    echo "<td>" . $portfolio["sector"] . "</td>";
    echo "<td>" . $buy_value . "</td>";
    echo "<td>" . $current_value . "</td>";
    echo "<td>" . $profit_loss . "</td>";
    echo "<td>" . $remarks . "</td>";
    echo "</tr>";
}
echo "</table>";



echo "<h2>Cari investor dengan nama 'Chen'</h2>";

$investorToFind = "Chen";

$investorNames = array_column($portfolios, 'investor');

$keyword = array_search($investorToFind, $investorNames);

if ($keyword === false) {
    echo "Investor '{$investorToFind}' not found.<br>";
} else {
    echo "Investor found! Here is $investorToFind's portfolio:<br>";
    echo "<pre>";
    print_r($portfolios[$keyword]);
    echo "<br>";
    echo "<br>";
    echo "</pre>";
}






?>