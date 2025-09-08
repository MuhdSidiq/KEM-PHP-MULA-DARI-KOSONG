<?php 

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $laporan = $_POST['laporan'];

    echo "<h1>Terima kasih, Laporan anda telah diterima, $name</h1>";
    
} else {

    echo "
    <h1>Borang Tidak Diterima</h1>";
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Rekod Kemalangan Industri</title>
</head>

<body>

    <form action="index.php" method="post">

    <label for="name">Nama:</label>
    <input type="input" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="phone">No. Telefon:</label>
    <input type="tel" id="phone" name="phone" required>
    <br>
    <label for="laporan">Laporan:</label>
    <input type="textarea" id="laporan" name="laporan" required>
    <button type="submit">Submit</button>

    </form>







</body>

</html>