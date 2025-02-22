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
     $food = [
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("chicken", "fish", "beaf"),
        "vegetables" => array("cucumber", "carrot"),
    ];

    echo $food["vegetables"][0];



    /*
    $food = [
        array("apple", "mango"),
        "Banana",
        "Cherry"
    ];

    echo $food[0][1];
    echo $food[1];

    $fruits = ["Apple", "Banana", "Cherry"];
    $test = ["Guava", "Strawberry"];

    array_splice($fruits, 2, 0, "Mango");
    array_splice($fruits, 3, 0, $test);
    array_splice($fruits, 6, 0, "Orange");
    print_r($fruits);
    array_push($fruits, "Mango");
    print_r($fruits);

    $fruits[] = "Mango";

    // echo $fruits[1];
    $fruits[1] = "Orange"; //Replacing data in an array
    $fruits[] = "Mango"; //Adding data to an array
    
    array_splice($fruits, 0, 1);

    echo $fruits[1];
    
    
    
   
   $tasks =[
        "Laundry" => "Daniel",
        "Trash" => "Frida",
        "Vacuum" => "Basse",
        "Dishes" => "Bella"
    ];

    $tasks["Dusting"] = "Tera";
    print_r($tasks);
    // sort($tasks);    
    //echo count($tasks);
    //print_r($tasks);
    //echo $tasks["Laundry"];
    

    */
    ?>
    
</body>
</html>