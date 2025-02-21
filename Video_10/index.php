<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $tasks =[
        "Laundry" => "Daniel",
        "Trash" => "Frida",
        "Vacuum" => "Basse",
        "Dishes" => "Bella"
    ];

    echo count($tasks)

    //print_r($tasks);

    //echo $tasks["Laundry"];
    /*
    $fruits = [
        "Apple", // 0
        "Banana", // 1
        "Cherry" // 2
    ];

    // echo $fruits[1];
    
    $fruits[1] = "Orange"; //Replacing data in an array
    $fruits[] = "Mango"; //Adding data to an array
    
    array_splice($fruits, 0, 1);

    echo $fruits[1];
    */
    ?>
    
</body>
</html>