<?php
session_start();

unset($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htp-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="asset/css/style_vid-24.css"> -->
</head>
<body>

    <?php
    echo $_SESSION["username"];
    ?>

</body>
</html>