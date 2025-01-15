<?php
require "includes/config.php";
require "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- External CSS for custom styles -->
    <title>Kuliner</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f3e9dc, #f9f5f1);
            color: #333;
            margin: 0;
            padding: 0;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background: #6f4e37;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        footer a {
            color: #f3e9dc;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <?php require "includes/navbar.php"; ?>
    </div>

    <div class="content mt-4" align="center">
        <!-- Konten Utama -->
        <?php require "includes/konten.php"; ?>
    </div>

    <!-- Footer -->
    <footer style="background-color: #cf0c5a;">
        <p style="color:#f3e9dc">&copy; 2025 Kuliner Nusantara. All rights reserved.</p>
        <p>Follow us on <a href="#">Instagram</a> | <a href="#">Facebook</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>