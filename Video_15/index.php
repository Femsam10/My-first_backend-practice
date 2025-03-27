<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    $test = 5;
    //for ($i = 0; $i <= 10; $i++)
    for ($i = 0; $i <= $test; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }
    //$boolean = true;
    //while ($boolean)
    $test = 5;
    while ($test < 10) {
        echo $test;
        $test++;
        // echo $boolean;
        // $boolean = false;
    }    
    */

    /*$test = 10;
    do {
        echo $test;
        $test++;
    } while ($test < 10);*/

    //$fruits = array("Appke", "Banana", "Orange");
    $fruits = array("Appke" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    foreach ($fruits as $fruit => $color) {
        echo "This is a " . $fruit . ", that has a color of " . $color . "<br>";
    }
    /*echo $fruits[0];
    echo $fruits[1];
    echo $fruits[2];*/
    ?>
</body>
</html>