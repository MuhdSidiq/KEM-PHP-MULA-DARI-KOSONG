<?php
// Process form submission
if ($_POST) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $timestamp = date('Y-m-d H:i:s');

    $tarikh = date('Y');
    
    // Simple validation
    if (!empty($name) && !empty($email)) {
        $submission_received = true;
    } else {
        $error_message = "Please fill in all required fields.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }

        .submission-details {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .submission-details h3 {
            margin-top: 0;
            color: #495057;
        }

        .submission-details p {
            margin: 5px 0;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Borang Laporan</h1>

        <?php if (isset($submission_received) && $submission_received): ?>
        <div class="success-message">
            <strong>Terima kasih!</strong> Borang laporan anda telah diterima.
        </div>

        <div class="submission-details">
            <h3>Maklumat Penghantaran:</h3>
            <p><strong>Nama:</strong>
                <?php echo htmlspecialchars($name); ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo htmlspecialchars($email); ?>
            </p>
            <p><strong>Masa Penghantaran:</strong>
                <?php echo $timestamp; ?>
            </p>
            <p><strong>Tarikh:</strong>
                <?php echo $tarikh; ?>
            </p>
        </div>

        <button onclick="window.location.href='borang-laporan.html'" style="background-color: #007bff;">
            Hantar Laporan Baru
        </button>

        <?php else: ?>

        <?php if (isset($error_message)): ?>
        <div class="error-message">
            <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="borang-laporan.php">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="" required>
            </div>

            <button type="submit">Hantar Laporan</button>
        </form>

        <?php endif; ?>
    </div>
</body>

</html>