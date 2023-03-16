<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <style>

    h3 {
        text-align: center;
    }

    table {
        text-align: center;
        margin-left: 25%;
        outline: none;
        border: none;
        border-spacing: 12px;
    }

    a {
        margin-left: 50%;
    }

    td {
         border: none;
    }

    th {
        border: none;
    }

    </style>
    <h3><?= $data['title']; ?></h3>

    <table border='1'>
        <thead>
            <th>Naam Vulkaan</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Laatste uitbarsting</th>
            <th>Aantal Slachtoffers</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>


    <a href="<?= URLROOT; ?>/home/index">home</a>
</body>
</html>