<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Completion Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .completed {
            background-color: green; /* Light green for completed */
        }
        .in-progress {
            background-color: orange; /* Light orange for in progress */
        }
        .pending {
            background-color: red; /* Light red for pending */
        }
    </style>
</head>
<body>

    <?php

$stockData = [
    [
        "company_name" => "Apple Inc.",
        "buy_volume" => 15000000,
        "sell_volume" => 12500000,
        "today_price" => 178.50,
        "yesterday_price" => 175.25
    ],
    [
        "company_name" => "Microsoft Corp.",
        "buy_volume" => 9800000,
        "sell_volume" => 10200000,
        "today_price" => 425.10,
        "yesterday_price" => 428.30
    ],
    [
        "company_name" => "Amazon.com Inc.",
        "buy_volume" => 7500000,
        "sell_volume" => 7300000,
        "today_price" => 189.90,
        "yesterday_price" => 188.75
    ],
    [
        "company_name" => "Alphabet Inc. (GOOGL)",
        "buy_volume" => 11000000,
        "sell_volume" => 11500000,
        "today_price" => 152.40,
        "yesterday_price" => 153.15
    ],
    [
        "company_name" => "Tesla, Inc.",
        "buy_volume" => 25000000,
        "sell_volume" => 22000000,
        "today_price" => 205.65,
        "yesterday_price" => 201.80
    ],
    [
        "company_name" => "NVIDIA Corp.",
        "buy_volume" => 18000000,
        "sell_volume" => 17500000,
        "today_price" => 1150.75,
        "yesterday_price" => 1140.50
    ],
    [
        "company_name" => "JPMorgan Chase & Co.",
        "buy_volume" => 4500000,
        "sell_volume" => 4800000,
        "today_price" => 195.20,
        "yesterday_price" => 196.10
    ]
];

    ?>


    <h1>Task Completion Table</h1>
    <table>
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Buy Volume</th>
                <th>Sell Volume</th>
                <th>Today Price</th>
                <th>Yesterday Price</th>
            </tr>
        </thead>
        <tbody> 


            <?php foreach ($Tasks as $task) { 
                
                if ($task["status"] == "Pending") {
                    continue;
                }
                
                $hargaStockBawah30 = $task["today_price"] < 300;


                switch($task["status"]) {
                    case "Completed":
                        $statusClass = "completed";
                        break;
                    case "In Progress":
                        $statusClass = "in-progress";
                        break;
                    case "Pending":
                        $statusClass = "pending";
                        break;
                }

                $status = $task["status"];


                ?>
                <tr class="<?php echo $statusClass; ?>">
                    <td><?php echo $task["nama"]; ?></td>
                    <td><?php echo $task["kategori"]; ?></td>
                    <td><?php echo $task["status"]; ?></td>
                    <td><?php echo $task["penanggung_jawab"]; ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>

                <?php 
                
                $total_tasks = count($Tasks);
                $total_completed = 0;
                $total_in_progress = 0;
                $total_pending = 0;

                foreach ($Tasks as $task) {
                    if ($task["status"] == "Completed") {
                        $total_completed++;
                    } elseif ($task["status"] == "In Progress") {
                        $total_in_progress++;
                    } elseif ($task["status"] == "Pending") {
                        $total_pending++;
                    }
                }

                echo "Total tasks: " . $total_tasks . "<br>";
                echo "Total completed: " . $total_completed . "<br>";
                echo "Total in progress: " . $total_in_progress . "<br>";
                echo "Total pending: " . $total_pending . "<br>";
                ?>


</body>
</html>



