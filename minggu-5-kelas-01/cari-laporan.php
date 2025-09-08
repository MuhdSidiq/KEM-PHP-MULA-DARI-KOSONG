<?php 

$records = [
    [
    "id" => "12345",
    "name" => "Ahmad Ibrahim",
    "timestamp" => "ahmad@gmail.com",

],
[
    "id" => "12345",
    "name" => "Ahmad Ibrahim",
    "timestamp" => "ahmad@gmail.com",

],
];


if ($_GET) {

    $no_laporan = $_GET['no-laporan'] ?? null;

    $found = false;

    foreach ($laporans as $laporan) {
        if ($laporan['id'] == $no_laporan) {
            $found = true;
            echo "<h2>Record of Report</h2>";
            echo "<p>Name: " . $laporan['name'] . "</p>";
            echo "<p>Email: " . $laporan['email'] . "</p>";
            echo "<p>Phone: " . $laporan['phone'] . "</p>";
            echo "<p>Type: " . $laporan['type'] . "</p>";
            echo "<p>Department: " . $laporan['department'] . "</p>";
            echo "<p>Years: " . $laporan['years'] . "</p>";
            echo "<p>Laporan: " . $laporan['maklumat'] . "</p>";
            break; 
        }
    }
    
    if (!$found) { 
        echo "<h2>Record of Report</h2>";
        echo "<p>No record found for the given name and email.</p>";
    }
       
} else {
    echo "<h2>Record of Report</h2>";
    echo "<p>Please enter no laporan to search for a report.</p>";
}
?>