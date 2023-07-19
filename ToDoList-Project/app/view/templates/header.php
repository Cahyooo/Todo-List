<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/Bootstrap/css/bootstrap.css">
    <?php
    $page = ['index.php', 'login.php', 'register.php'];
    $filename = basename($_SERVER['PHP_SELF']);
    if ($filename == $page[0]) {
        $cssLink = BASEURL . '/style-index.css';
    } else if ($filename == $page[1]) {
        $cssLink = BASEURL . '/style-login.css';
    } else if ($filename == $page[2]) {
        $cssLink = BASEURL . '/style-register.css';
    }

    // Menggunakan $cssLink dalam tag <link> CSS
    echo '<link rel="stylesheet" href="' . $cssLink . '">';
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <script src="<?= BASEURL ?>/jquery.js"></script>
</head>

<body>