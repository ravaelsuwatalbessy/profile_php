<?php

$host       = "localhost"; 
$username   = "root"; 
$pass       = ""; 
$db         = "ravael"; 
$conn    = mysqli_connect($host, $username, $pass, $db); 

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('kno-nord-stage-3-ha88-5-b_1.png'); background-size: 100%;">
    <h1 style="color : orange">Halaman Blog</h1>
    <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($conn, $query);

            $no = 1;

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($no >=0) {
            ?>
    <article style="color : white">
        <h2><?= $row["judul"] ?></h2>
        <p>
        <?= $row["artikel"] ?>
        </p>
    </article>
    <?php } 
            $no++;
            }
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);}
            ?>
    <nav>
        <ul>
    <li style="color: pink"><a style="text-decoration: none; color: white" href="index.html">Kembali ke halaman utama</a></li>
        </ul>
    </nav>
</body>
</html>